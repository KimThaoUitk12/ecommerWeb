<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sanpham;
use App\anh;
use App\hang;
use App\Khachhang;
use App\Hoadon;
use App\User;
use Session;
use App\Cart;
use App\Chitiethoadon;

use Auth;



class PageController extends Controller
{
    protected $request;
    //
    public function getIndex(){

        $moi1=Sanpham::orderBy('namsx','desc')
                          ->take(4)
                          ->get();
        $moi2=Sanpham::orderBy('namsx','desc')
                          ->skip(4)
                          ->take(4)
                          ->get();
        $moi3=Sanpham::orderBy('namsx','desc')
                          ->skip(8)
                          ->take(2)
                          ->get();

    	$caocap1=Sanpham::where('gia','>=',10000000)
                          ->orderBy('namsx','desc')
                          ->take(4)
                          ->get();
    	$caocap2=Sanpham::where('gia','>=',10000000)
                          ->orderBy('namsx','desc')
                          ->skip(4)
                          ->take(4)
                          ->get();
    	$caocap3=Sanpham::where('gia','>=',10000000)
                          ->orderBy('namsx','desc')
                          ->skip(8)
                          ->take(2)
                          ->get();

    	$trungcap1=Sanpham::where('gia','<',10000000)
                            ->orderBy('namsx','desc')
                            ->where('gia','>=',5000000)
                            ->take(4)
                            ->get();
        $trungcap2=Sanpham::where('gia','<',10000000)
                            ->orderBy('namsx','desc')
                            ->where('gia','>=',5000000)
                            ->skip(4)
                            ->take(4)
                            ->get();
        $trungcap3=Sanpham::where('gia','<',10000000)
                            ->orderBy('namsx','desc')
                            ->where('gia','>=',5000000)
                            ->skip(8)
                            ->take(2)
                            ->get();

    	$phothong1=Sanpham::where('gia','<',3000000)
                            ->orderBy('namsx','desc')
                            ->take(4)
                            ->get();
        $phothong2=Sanpham::where('gia','<',3000000)
                            ->orderBy('namsx','desc')
                            ->skip(4)
                            ->take(4)
                            ->get();
        $phothong3=Sanpham::where('gia','<',3000000)
                            ->orderBy('namsx','desc')
                            ->skip(8)
                            ->take(2)
                            ->get();

    	return view('Page.index',compact('caocap1','caocap2','caocap3','trungcap1','trungcap2','trungcap3','phothong1','phothong2','phothong3','moi1','moi2','moi3'));
    }

    public function getLoaiSp($type){
        // $sp_theohang=Sanpham::where('hang',$type)->get();
        $sp_theohang=Sanpham::where('hang',$type)
                    ->paginate(9);

        $ngaunhien=Sanpham::inRandomOrder()->limit(5)->get();

    	return view('Page.loaisanpham',compact('sp_theohang','ngaunhien'));
    }

    public function getCTSP(request $req){

        $sanpham=Sanpham::where('masp',$req->id)->first();

        $ngaunhien=Sanpham::inRandomOrder()
                    ->limit(5)
                    ->get();

        $anh=anh::where('masp',$req->id);

        $sanphamtheohang1=Sanpham::where('hang',$sanpham->HANG)
                            ->limit(3)
                            ->get();
        $sanphamtheohang2=Sanpham::where('hang',$sanpham->HANG)
                            ->skip(3)
                            ->limit(3)
                            ->get();

    	return view('Page.chitiet_sanpham', compact('sanpham','anh','ngaunhien','sanphamtheohang1','sanphamtheohang2'));
    }

    public function getCapnhat_Khachhang(){
    	return view('Page.Capnhat_Thongtin_KH');
    }

    public function getGiohang(){
        if(Session('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            // $view()->with(['cart'=>Session::get('cart'), 'sp_in_cart'=>$cart->items, 'totalprice'=>$cart->totalprice, 'totalQty'=>$cart->totalQty]);
            return view('Page.Giohang',['cart'=>Session::get('cart'), 'sp_in_cart'=>$cart->items, 'totalprice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            dd(111);
        }else{
            return view('Page.Giohang');
        }
    }

    public function getCanhan(){
    	return view('Page.canhan');
    }

    public function getDangky(){
    	return view('Page.dangky');
    }

    public function getDangnhap(){
    	return view('Page.dangnhap');
    }

    public function getIndexad(){
    	return view('Page.trangchuad');
    }
  
  
    public function getSanphamad(){
     
            $sanpham=Sanpham::select('MASP','TENSP','HANG','MOTA','GIA','GIAKHUYENMAI','MANHINH','CAMERATRUOC','CAMERASAU')->get();
            return view('Page.sanphamad',compact('sanpham'));       
       
        }
    public function themsp(Request $request)
    {
      
        $Sanpham = new Sanpham;
        $Sanpham->tensp = $request->ten; 
        $Sanpham->hang = $request->hang;
        $Sanpham->mota = $request->mota;
        $Sanpham->gia = $request->gia;
        $Sanpham->anhdaidien = $request->anh;
        $Sanpham->giakhuyenmai = $request->giakm;
        $Sanpham->ram = $request->ram;
        $Sanpham->manhinh = $request->manhinh;
        $Sanpham->cameratruoc = $request->truoc;
        $Sanpham->camerasau = $request->sau;
        $Sanpham->save();
        return redirect()->action('PageController@getSanphamad');        
    }
    public function xoasp($id)
    {
       
        Sanpham::where('MASP', $id)->delete();     
        return redirect()->route('xoasp');  
    }
    
 
    //hien thi nha san xuat
    public function getNsxad(){
        $Hang=hang::all();
        return view('Page.nsxad',compact('Hang'));   
    }
    //them nhà san xuat
    public function themhang(Request $request)
    {      
        $Hang = new hang;      
        $Hang->tenhang = $request->hang;       
        $Hang->save();
        return redirect()->action('PageController@getNsxad');        
    }
    //xoa nha san xuat
    public function xoahang($id)
    {
       
        hang::where('MAHANG', $id)->delete();     
        return view('Page.nsxad');  
    }
   


public function suahang(Request $request,$id)
    {
     
      
    
        $hang= hang::where('MAHANG', $id);
        $request->validate(['TENHANG'=>'required']);
        
        $hang->tenhang = $request->hang;  
        $hang->save();
        return redirect()->action('PageController@getNsxad'); 
       
    }

    
    //đăng kí tài khoản
    public function postRegister(request $req){
        $this->validate($req,
            [
                'email1'=>'required|email|unique:users,email',
                'password1'=>'required|min:6|max:20',
                'fullname1'=>'required',
                'repassword1'=>'required|same:password1'
            ],
            [
                'email1.required'=>'vui lòng nhập email',
                'email1.email'=>'không đúng định dạng email',
                'email1.unique'=>'email đã có người sử dụng',
                'password1.required'=>'vui lòng nhập mật khẩu',
                'repassword1.same'=>'nhập lại mật khẩu không đúng',
                'password1.min'=>'mật khẩu phải có ít nhất 6 kí tự',
                'password1.max'=>'mật khẩu có tối đa 20 kí tự'
            ]
        );

        $user=new User();
        $user->FULL_NAME=$req->fullname1;
        $user->DIACHI=$req->diachi1;
        $user->SDT=$req->sdt1;
        $user->PASSWORD=bcrypt($req->password1);
        $user->EMAIL=$req->email1;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
 //Đăng nhập tài khoản
 public function postLogin(request $req){
    $this->validate($req,
        [
            'email'=>'required|email',
            'password'=>'required'
        ],
        [
            'eamil.required'=>'hãy nhập eamil đăng nhập',
            'eamil.email1'=>'nhập email không đúng định dạng',
            'password.required'=>'hãy nhập mật khẩu'
        ]);
    $credentials=['email'=>$req->email,'password'=>$req->password];
    if(Auth::attempt($credentials)){
        $user=User::where('email',$req->email)->first();
        if($user->ROLE=='khach'){
            return redirect()->route('trang-chu');
            // return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }else{
            return redirect()->route('indexad');
        }
    }else{
        return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
    }
}

//đăng xuất
public function getLogout(){
    Auth::logout();
    return redirect()->route('trang-chu');
}

//Thêm giỏ hàng
public function getThemgiohang(Request $red, $id){

    $sp=Sanpham::where('MASP',$id)->first();
    $oldcart=Session::get('cart')?Session::get('cart'):null;
    $cart = new Cart($oldcart);
    $cart->add($sp,$id);
    $red->session()->put('cart', $cart);
    return redirect()->back();
}

//Xóa sản phẩm
public function getXoagiohang($id){
    $oldCart=Session::has('cart')?Session::get('cart'):null;
    $cart=new Cart($oldCart);
    $cart->removeItem($id);
    if($cart->totalQty==0){
        Session::forget('cart');
    }else{
        Session::put('cart',$cart);
    }
    return redirect()->route('giohang');
}

// cập nhật giỏ hàng
public function getCapnhatgiohang(){
    // $id = $req->id;
    // $sl = $req->sl;
    if(request::ajax()){
        echo "oke";
    }
    // $cart=new Cart(Session::has('cart')?Session::get('cart'):null);
    // $cart->update($sl,$id,$gia);
}


//Đặt hàng
public function postDathang(Request $req){
    $cart = Session::get('cart');

    $khachhang = new Khachhang;
    $khachhang->TEN = $req->ten;
    $khachhang->EMAIL = $req->email;
    $khachhang->DIACHI = $req->diachi;
    $khachhang->SDT = $req->sdt;
    $khachhang->GHICHU = $req->notes;
    $khachhang->save();

    $hoadon = new Hoadon;
    $hoadon->IDKH = $khachhang->id;
    $hoadon->TINHTRANG = "Chưa giao";
    $hoadon->NGAYHD = date('Y-m-d');
    $hoadon->TONGTIEN = $cart->totalPrice;
    $hoadon->GHICHU = $req->note;
    $hoadon->save();

    foreach ($cart->items as $key => $value) {
        $cthd = new Chitiethoadon;
        $cthd->MAHD = $hoadon->mahd;
        $cthd->MASP = $key;
        $cthd->SOLUONG = $value['qty'];
        $cthd->GIA = ($value['price']/$value['qty']);
        $cthd->save();
    }
    Session::forget('cart');
    echo "Đặt hàng thành công";
    return redirect()->back()->with('thongbao','Đặt hàng thành công');
}


public function getDathang(){
    return view('Page.dathang');
}
    //jien thi danh sach don hang
    public function getDonhangad(){
        
        $data = DB::table('hoadon')->join('khachhang', 'hoadon.IDKH', '=', 'khachhang.ID')
        ->join('chitiethoadon', 'chitiethoadon.mahd', '=', 'hoadon.mahd')
        ->join('sanpham', 'sanpham.masp', '=', 'chitiethoadon.masp')
        ->get();
    	return view('Page.donhangad',compact('data'));
    }

    //update nha san xuat
    public function updatehang(Request $request,$id)
    {         
       
        $hang = hang::findOrFail($request->mahang);
        $hang->update($request->all());      
        return back();         
    }
      //update don hang
      public function updatehd(Request $request,$id)
      {         
       
         $hang = Hoadon::findOrFail($request->mahd);
          $hang->update($request->all());      
          return back();         
      }
      //update san pham
      public function updatesp(Request $request,$id)
      {         
       
         $sp = sanpham::findOrFail($request->masp);
          $sp->update($request->all());      
          return back();         
      }
      //report
      public function getReportad(){
        
    	return view('Page.reportad',compact('data'));
    }

    //liet ke danh sach doa don
      public function getReportadPost(Request $request){
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('hoadon')
            ->join('khachhang', 'hoadon.IDKH', '=', 'khachhang.ID')
            ->join('chitiethoadon', 'chitiethoadon.mahd', '=', 'hoadon.mahd')
            ->join('sanpham', 'sanpham.masp', '=', 'chitiethoadon.masp')
            ->where('NGAYHD','LIKE', "%{$query}%") ->get();
           
            echo "<table border =1 >";
            echo"<tr><th>STT</th><th>Mã hóa đơn</th><th>Mã sản phẩm</th><th>Tên khách hàng</th><th>Tổng tiền</th></tr>";
            $stt=0;
            foreach($data as $row)
            {               
            echo "<tr>";  
            echo "<td>" .$stt++ . "</td>";       
            echo "<td>" .$row->MAHD . "</td>";
            echo "<td>" . $row->MASP. "</td>";
            echo "<td>" . $row->TEN. "</td>";
            echo "<td>" . $row->TONGTIEN. "</td>";
            echo "</tr>";        
           }
           echo "</table>";
           
       }
    }
     
   
    public function report(){    
       
        $data = DB::table('hoadon')
        ->join('khachhang', 'hoadon.IDKH', '=', 'khachhang.ID')
        ->join('chitiethoadon', 'chitiethoadon.mahd', '=', 'hoadon.mahd')
        ->join('sanpham', 'sanpham.masp', '=', 'chitiethoadon.masp')->get();
      
        return $data;
    }

// hien thi file pdf
   function pdf()
    {
      
        //
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->reportpdf());
     return $pdf->stream();
    }
   function date_pdf()
    {
      
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->reportpdf());
        return $pdf->stream();
    }
    //
//    function date_pdf(Request $request)
//     {
//         $type = $request->input('date');
//         $pdf = \App::make('dompdf.wrapper');
     
//             $pdf = PDF::loadView('Page.getReportadPost');
//             return $pdf->stream();
        
//     }
//noi dung in
    function reportpdf()
    {
        $data = $this->report();
        $output = '
     <h3>University of Information Technology</h3>
      <h1 align="center">DANH SACH DON HANG</h1>
      <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>      
        <th style="border: 1px solid; padding:12px;" width="20%">STT</th>
        <th style="border: 1px solid; padding:12px;" width="30%">Ma ho don</th>
        <th style="border: 1px solid; padding:12px;" width="15%">Ma san pham</th>
        <th style="border: 1px solid; padding:12px;" width="15%">Ten khach hang</th>
        <th style="border: 1px solid; padding:12px;" width="15%">Ten san pham</th>
        <th style="border: 1px solid; padding:12px;" width="15%">Ngay</th>
        <th style="border: 1px solid; padding:12px;" width="20%">Tong tien</th>
     </tr>
     ';
        $stt=0;
        foreach ($data as $row) {
            $output .= '
      <tr>
    
       <td style="border: 1px solid; padding:12px;">'.$stt++.'</td>
       <td style="border: 1px solid; padding:12px;">'.$row->MAHD.'</td>
       <td style="border: 1px solid; padding:12px;">'.$row->MASP.'</td>
       <td style="border: 1px solid; padding:12px;">'.$row->TEN.'</td>
       <td style="border: 1px solid; padding:12px;">'.$row->TENSP.'</td>
       <td style="border: 1px solid; padding:12px;">'.$row->NGAYHD.'</td>
       <td style="border: 1px solid; padding:12px;">'. $row->TONGTIEN.'</td>
      </tr>
      
      ';
        }
   
        $output .= '</table>';
        return $output;
    }

    //noi dung in hoa don
    function reportpdfdh($id)
    {
        $pdf = \App::make('dompdf.wrapper');        
    $data=Hoadon::where('MAHD',$id)->first();
    $kh=Khachhang::where('ID',$data->IDKH)->first();
    $cthd=chitiethoadon::where('MAHD',$data->MAHD)->first();
    $sp=Sanpham::where('MASP',$cthd->MASP)->first();
    //->join('khachhang', 'hoadon.IDKH', '=', 'khachhang.ID')::where('MAHD',$id)->first();
    
        $output = '
     <h3>University of Information Technology</h3>
      <h1 > DON HANG</h1>

      <table  width="50%" style="border-collapse: collapse; border: 0px;">
      <tr>            
        <th style="border: 1px solid; padding:12px;" width="30%">Ma hoa don</th>
        <td style="border: 1px solid; padding:12px;">'.$data->MAHD.'</td>  
     </tr>
      <tr>            
        <th style="border: 1px solid; padding:12px;" width="30%">Ma san pham</th>
        <td style="border: 1px solid; padding:12px;">'.$sp->MASP.'</td>  
     </tr>
      <tr>            
      <th style="border: 1px solid; padding:12px;" width="30%">Ten khach hang</th>
      <td style="border: 1px solid; padding:12px;">'.$kh->TEN.'</td>
     
     </tr>
      <tr>            
      <th style="border: 1px solid; padding:12px;" width="30%">Ten san pham</th>
      <td style="border: 1px solid; padding:12px;">'.$sp->TENSP.'</td>
     
     </tr>
      <tr>            
      <th style="border: 1px solid; padding:12px;" width="30%">Ten khach hang</th>
      <td style="border: 1px solid; padding:12px;">'.$data->TONGTIEN.'</td>  
     </tr>
     ';
       
            
        
     
        $output .= '</table>';
        $output .= '<br><br>';
        $output .= '<div style="text-align: center;">Ngay... Thang... Nam...</div>';
        return $output;
        $pdf->loadHTML( $output);
        return $pdf->stream();
    }

    public function getSearch(Request $req)
    {
        
        if($req->key==""){
            $key=null;
        }else{
            $key=$req->key;
        }
        $product = Sanpham::where('TENSP','like','%'.$key.'%')
                          ->orWhere('GIA',$key)
                            ->get();
        return view('Page.search', compact('product'));

    }
}

  