
@extends('masterAd')
@section('content')

<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="trangchuad">Trang chủ</a><i class="fa fa-angle-right"></i>Đơn hàng</li>
				</ol>

				<!-- grids -->
				<div class="grids">
					
					
					
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
<!-- 									<p>Noi dung</p>
-->								
<div class="agile-tables">
	<div class="w3l-table-info">
		<div style="text-align: right"><a href="{{ url('donhang_pdf') }}"><i class="fa fa-print"></i><span>PRINT PDF</span></a></div>

		<h2>Danh sách đơn hàng</h2>
		<p>Có tổng số {{count($data)}} đơn hàng</p>
		<table id="table" >
			<thead>
				<tr>
				    <th>STT</th>
					<th>Mã đơn hàng</th>
					<th>Tên khách hàng</th>
					<th>Địa chỉ</th>
					<th>Số điện thoại</th>
					<th>Email</th>
					<th>Ngày tạo</th>					
					<th>Tình trạng</th>
					<th>Chi tiết đơn hàng</th>
					<th>Chỉnh sửa</th>
					<th>In</th>
				</tr>
			</thead>
			<tbody>
			<?php $stt=0?>
			@foreach($data as $hang)
			<?php $stt++?>	
				<tr class="danger">
				    <td>{{$stt}}</td>
					<td>{{$hang->ID}}</td>
					<td>{{$hang->TEN}}</td>
					<td>{{$hang->DIACHI}}</td>
					<td>{{$hang->SDT}}</td>
					<td>{{$hang->EMAIL}}</td>
					<td>{{$hang->NGAYHD}}</td>
					<td>{{$hang->TINHTRANG}}</td>
					<td> <button type="button" class="btn btn-primary"
						data-mahd="{{$hang->MAHD}}" 
						data-masp="{{$hang->MASP}}" 
						data-ten="{{$hang->TEN}}"
						data-tensp="{{$hang->TENSP}}"
						data-tien="{{$hang->TONGTIEN}}"				
						data-ngay="{{$hang->NGAYHD}}"				
						data-tinhtrang="{{$hang->TINHTRANG}}"				
					 data-toggle="modal" data-target="#myModal">Chi Tiết</button></td>			
					<td>
						<button class="btn btn-info" 
						data-mahd="{{$hang->MAHD}}"
						data-tinhtrang="{{$hang->TINHTRANG}}"	
						data-toggle="modal" data-target="#edit">Edit</button>
					</td>
				<td> <div style="text-align: right"><a href="{{ url('donhangpdf',$hang->MAHD) }}"><span> PDF</span></a></div>
				@endforeach
					 </tr>			
			</tbody>
		</table>
	</div>

	


	{{-- Cap nhat don hang --}}
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
			</div>
			<form action="{{ route('updatehd',($hang->MAHD)) }}" method="POST">
									
				@csrf	
					
				<div class="modal-body">
				
						<input type="hidden" class="form-control" name="mahd" id="mahd" value="">
					
					
						<div class="form-group">
							<label for="tinhtrang">Tình trạng</label>
							<input type="text" class="form-control" name="tinhtrang" id="tinhtrang">
						</div>
					
					 
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-primary">Save Changes</button>
				</div>
			</form>
		  </div>
		</div>
	  </div>
{{--  --}}



<!-- chietiet -->
<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Chi tiết đơn hàng</h4>
				</div>
				<div class="modal-body">
					<form action="">
					<div class="form-group">
					<p>
						Tên khách hàng: <span id="ten"></span>	<br>
						Mã đơn hàng: <span id="mahd"></span><br>
						Mã sản phẩm: <span id="masp"></span><br>
						Ngày đặt hàng: <span id="ngay"></span><br>
						Tên sản phẩm: <span id="tensp"></span><br>
						Tình trạng: <span id="tinhtrang"></span><br>
						Tổng tiền: <span id="tien"></span><br>
					</p>
							
							<a href=""><img height="250px" src="source/images/Iphone/{{$hang->ANHDAIDIEN}}" alt=""></a>
						
						</div>
					
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
<!--  -->
</div>
</div>
</div>

<div class="clearfix"> </div>
</div>
</div>
</div>
<!-- //grids -->
<!--photoday-section-->	


<div class="col-sm-4 wthree-crd">
	<div class="card">
		<div class="card-body">
			
		</div>
	</div>
</div>

<div class="clearfix"></div>
{{-- Chi Tiet don hang --}}
<script> 
		$('#myModal').on('show.bs.modal', function (event) {
		   var button = $(event.relatedTarget) 
			 var mahd = button.data('mahd') 
			 var masp = button.data('masp') 
			 var ten = button.data('ten') 
			 var tensp = button.data('tensp') 
			 var tien = button.data('tien') 
			 var ngay = button.data('ngay') 		
			 var tinhtrang = button.data('tinhtrang') 		
			 var modal = $(this)
			 modal.find('.modal-body #ten').text(ten);
			 modal.find('.modal-body #mahd').text(mahd);
			 modal.find('.modal-body #masp').text(masp);
			 modal.find('.modal-body #tien').text(tien);
			 modal.find('.modal-body #tensp').text(tensp);
			 modal.find('.modal-body #ngay').text(ngay);			
			 modal.find('.modal-body #tinhtrang').text(tinhtrang);			
			
		 })</script>

{{-- chinh sua don hang --}}


<script>
  $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var mahd = button.data('mahd') 
      var tinhtrang = button.data('tinhtrang') 
     
      var modal = $(this)
    
      modal.find('.modal-body #mahd').val(mahd);
      modal.find('.modal-body #tinhtrang').val(tinhtrang);
})
</script>
<!--//photoday-section-->	
<!-- script-for sticky-nav -->
<script>
	$(document).ready(function() {
		var navoffeset=$(".header-main").offset().top;
		$(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".header-main").addClass("fixed");
			}else{
				$(".header-main").removeClass("fixed");
			}
		});
		
	});
</script>

<div class="inner-block">

</div>



@endsection