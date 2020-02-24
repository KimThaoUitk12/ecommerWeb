@extends('master')
@section('content')

<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Đăng</strong> nhập</span></h4>
						<form action="{{route('login')}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<fieldset>
								@if(Session::has('flag'))
								<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
								@endif
								<div class="control-group">
									<label class="control-label">Email đăng nhập</label>
									<div class="controls">
										<input type="text" placeholder="Email" id="me" class="input-xlarge" name="email" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Mật khẩu</label>
									<div class="controls">

										<input type="password" placeholder="Nhập DHP" id="password" class="input-xlarge" name="password" required>
									</div>
								</div>
								<!-- <label>
							        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ghi nhớ mật khẩu
							    </label> -->
								<div class="control-group">
									<input tabindex="3" class="btn btn-primary large" type="submit" id="submit"  value="Đăng nhập">
									<hr>
									<p class="reset">Thay đổi <a tabindex="4" href="#" title="Recover your username or password">tên đăng nhập và mật khẩu</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">
					@if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $e)
						{{$e}}
						@endforeach
					</div>
					@endif
					@if(Session::has('thanhcong'))
					<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif					
						<h4 class="title"><span class="text"><strong>Đăng kí</strong> Form</span></h4>
						<form action="{{route('register')}}" method="post" class="form-stacked">
							<fieldset>
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="control-group">
									<label class="control-label">Địa chỉ email</label>
									<div class="controls">
										<input type="text" placeholder="Nhập 123@gmail.com" class="input-xlarge" id="email1" name="email1" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Họ và tên</label>
									<div class="controls">
										<input type="text" placeholder="tên đầy đủ" class="input-xlarge"
										id="fullname1" name="fullname1" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Địa chỉ:</label>
									<div class="controls">
										<input type="text" placeholder="Địa chỉ" class="input-xlarge"
										id="diachi1" name="diachi1" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Số điện thoại</label>
									<div class="controls">
										<input type="text" placeholder="Số điện thoại" class="input-xlarge"
										id="sdt1" name="sdt1" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Mật khẩu:</label>
									<div class="controls">
										<input type="password" placeholder="mật khẩu" class="input-xlarge" id="passord1" name="password1" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nhập lại mật khẩu:</label>
									<div class="controls">
										<input type="password" placeholder="Nhập lại mật khẩu" class="input-xlarge" id="passwod1" name="repassword1" required>
									</div>
								</div>						                            
								<hr><!-- 
								<div class="g-recaptcha" data-sitekey="6LfExFUUAAAAAD2ouMMgpoIrl6tZED6yKcqrpa1i"></div> -->
								<div class="actions"><input tabindex="9" class="btn btn-primary large" id="submit1" onclick="validate1()" type="submit" value="Tạo tài khoản"></div>

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
				// var username=document.getElementById("username").value;
				// var password=document.getElementById("password").value;
				// if(username=="DHP" && password=="DHP")
				// {
				// 	alert("Login successfully!");
				// 	window.location="/index.html";
				// 	return false;
				// }
				// else{
				// 	attempt--;
				// 	alert("Fail to login");
				// }
				// if(attempt==0){
				// 	document.getElementById("username").disabled=true;
				// 	document.getElementById("password").disabled=true;
				// 	document.getElementById("submit").disabled=true;
				// 	return false;
				// }
			}
			function validate1(){
				// var username=document.getElementById("username1").value;
				// var password=document.getElementById("password1").value;
				// var email=document.getElementById("email1").value;
				// if(username=="DHP" && password=="DHP" && email=="123@gmail.com")
				// {
				// 	alert("Create account successfully!");
				// 	window.location="index.html";
				// 	return false;
				// }
				// else{
				// 	attempt--;
				// 	alert("Fail to login");
				// }
				// if(attempt==0){
				// 	document.getElementById("username1").disabled=true;
				// 	document.getElementById("password1").disabled=true;
				// 	document.getElementById("email1").disabled=true;
				// 	document.getElementById("submit1").disabled=true;
				// 	return false;
				// }
			}
		</script>
		@endsection