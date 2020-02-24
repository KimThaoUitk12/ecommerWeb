@extends('master')
@section('content')
		<div class="row">
			<div class="span5">					
				<h4 class="title"><span class="text"><strong>Thông tin</strong> cá nhân</span></h4>
				<form action="newcustomer.html" method="post">
					<input type="hidden" name="next" value="/">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Họ tên</label>
							<div class="controls">
								<input type="text" placeholder="Nhập họ tên"  class="input-xlarge" id="name" name="name" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Địa chỉ</label>
							<div class="controls">
								<input type="text" placeholder="Nhập địa chỉ"  class="input-xlarge" id="address" name="address" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Số điện thoại</label>
							<div class="controls">
								<input type="text" placeholder="Nhập số điện thoại" id="numberphone" class="input-xlarge" name="numberphone" required>
							</div>
						</div>
						<div class="control-group">
							<input tabindex="3" class="btn btn-primary large" type="submit" id="submit" onclick="validate()" value="Cập nhật thông tin">
							<hr>
						</div>
					</fieldset>
				</form>				
			</div>

		</div>
		<script type="text/javascript">
		$(function() {
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
		});
	</script>
	<script type="text/javascript">
		var attempt=3;
		function validate(){
			var name=document.getElementById("name").value;
			var address=document.getElementById("address").value;
			var numberphone=document.getElementById("numberphone").value;
			if(name!=null && address!=null && numberphone!=null )
			{
				alert('Update information successfully!');
				window.location.href = "customer.html";
				return false;
			}
			else{
				attempt--;
				alert("Fail to update");
				return true;
			}
			if(attempt==0){
				document.getElementById("name").disabled=true;
				document.getElementById("address").disabled=true;
				document.getElementById("numberphone").disabled=true;
				document.getElementById("submit").disabled=true;
				return false;
			}
		}
		</script>
@endsection