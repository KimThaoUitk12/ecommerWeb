<?php
namespace App;

class Cart
{
	public $items=null;
	public $totalQty=0;
	public $totalPrice=0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){
		if($item->GIAKHUYENMAI==0){
			$giohang=['qty'=>0, 'item'=> $item, 'price'=>$item->GIA, 'tien'=>0];
		}else{
			$giohang=['qty'=>0, 'item'=> $item, 'price'=>$item->GIAKHUYENMAI, 'tien'=>0];
		}
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang=$this->items[$id];
			}
		}
		$giohang['qty']=$giohang['qty']+1;
		if($item->GIAKHUYENMAI==0){
			$giohang['price']=$item->GIA*$giohang['qty'];
		}else{
			$giohang['price']=$item->GIAKHUYENMAI*$giohang['qty'];
		}
		// $giohang['price']=$item->GIA*$giohang['qty'];
		// $giohang['tien']=$giohang['price']*$giohang['qty'];
		$this->items[$id]=$giohang;
		$this->totalQty++;
		if($item->GIAKHUYENMAI==0){
			$this->totalPrice+=$item->GIA;
		}else{
			$this->totalPrice+=$item->GIAKHUYENMAI;
		}
		// $this->totalPrice+=$item->GIA;
	}

	public function update($sl,$id){
		$this->items[$id]['qty'] = $sl;
	    $this->items[$id]['price'] = $sl * $item->price;
	    $this->totalQty = 0;
    	foreach($this->items as $element) {
	        $this->totalQty += $element['qty'];
	        $this->totalPrice = $this->totalQty * $item->price;
    	}
        // $red->session()->put('cart', $cart);
	}

	//Xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price']-=$this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice-=$this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}

	//Xóa nhiều
	public function removeItem($id){
		$this->totalQty-=$this->items[$id]['qty'];
		$this->totalPrice-=$this->items[$id]['price'];
		unset($this->items[$id]);
	}
}




?>