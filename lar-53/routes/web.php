<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getCTSP'
]);

Route::get('cap-nhat-khach-hang',[
	'as'=>'capnhatkhachhang',
	'uses'=>'PageController@getCapnhat_Khachhang'
]);

Route::get('gio-hang',[
	'as'=>'giohang',
	'uses'=>'PageController@getGiohang'
]);

Route::get('ca-nhan',[
	'as'=>'canhan',
	'uses'=>'PageController@getCanhan'
]);

Route::get('dang-ky',[
	'as'=>'dangky',
	'uses'=>'PageController@getDangky'
]);

Route::get('dang-nhap',[
	'as'=>'dangnhap',
	'uses'=>'PageController@getDangnhap'
]);

Route::get('index-ad',[
	'as'=>'indexad',
	'uses'=>'PageController@getIndexad'
]);

Route::get('sanpham-ad/',[
	'as'=>'sanphamad',
	'uses'=>'PageController@getSanphamad'
]);


//sua san pham


// thêm sản phẩm
Route::get('sanpham','PageController@themsp')->name('sanpham');
Route::post('sanpham','PageController@themsp')->name('sanpham');
//xóa sản phhâme
Route::GET('delete/{id}',['as'=>'xoasp','uses'=>'PageController@xoasp']);
Route::POST('delete/{id}',['as'=>'xoasp','uses'=>'PageController@xoasp']);

Route::POST('updatesp/{id}',['as'=>'updatesp','uses'=>'PageController@updatesp']);

//hien thi nha san xuat
Route::get('nsx-ad',['as'=>'nsxad',	'uses'=>'PageController@getNsxad']);
Route::post('nsx-ad',['as'=>'nsxad','uses'=>'PageController@getNsxad']);
//them nha san xuat
Route::POST('themhang',['as'=>'themhang','uses'=>'PageController@themhang']);
//xoa nha san xuat
Route::GET('xoahang/{id}',['as'=>'xoahang','uses'=>'PageController@xoahang']);
//sua nha san xuat

Route::POST('updatehang/{id}',['as'=>'updatehang','uses'=>'PageController@updatehang']);
//don hang
Route::get('donhang-ad',[
	'as'=>'donhangad',
	'uses'=>'PageController@getDonhangad'
]);

// 
;

//update don hang

Route::POST('updatehd/{id}',['as'=>'updatehd','uses'=>'PageController@updatehd']);
//report
Route::get('report-ad', 'PageController@getReportad');
Route::POST('report-ad',['as'=>'report-ad','uses'=>'PageController@getReportadPost']);
Route::get('donhang_pdf', 'PageController@pdf');
Route::get('date_pdf', 'PageController@date_pdf');


//đăng kí tài khoản
Route::post('dang-ky-tai-khoan',[
	'as'=>'register',
	'uses'=>'PageController@postRegister'
]);
//đăng nhập tài khoản
Route::post('dang-nhap-tai-khoan',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);

//Đăng xuất
Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=> 'PageController@getLogout'
]);


//Thêm vào giỏ hàng
Route::get('them-giohang/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getThemgiohang'
]);

//Xóa sản phẩm
Route::get('xoa-giohang/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getXoagiohang'
]);

//Cập nhật giỏ hàng
Route::post('capnhat-giohang/{id}/{sl}',[
	'as'=>'capnhatgiohang',
	'uses'=>'PageController@getCapnhatgiohang'
]);


//Đặt hàng
Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postDathang'
]);


//Get trang đặt hàng
Route::get('checkout',[
	'as'=>'trangdathang',
	'uses'=>'PageController@getDathang'
]);

// hien thi danh sach don hang
Route::get('search',[
	 'as'=>'search',
	 'uses' => 'PageController@getSearch'
]);

Route::get('donhangpdf/{id}', 'PageController@reportpdfdh');