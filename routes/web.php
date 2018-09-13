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
    return view('frontend.home.home');
})->name('home.page');

Route::get('/2r', function () {
    return view('frontend.contact.contact');
});
	Route::post('/account-login','AcccountController@cheak_login')->name('account-login');

Route::get('/upaZilas','AcccountController@get_Upa_Zilass');
Route::get('/prouductImagesDelete','ProductController@prouduct_Images_Delete');

	Route::get('/accountlogin','AcccountController@show')->name('account.login');
	Route::post('/account-login','AcccountController@cheak_login')->name('account-login');
	Route::post('/account-ajax','AcccountController@cheak_ajax')->name('account-login');

Route::get('/account-logout','AcccountController@destroy')->name('account-logout');

Route::get('/my-account','AcccountController@my_account')->name('my.account');
Route::get('/order-information/{id}','AcccountController@order_information')->name('my.order.details');


Route::get('/single-product/{id}','SototabazarController@show_single_product');
Route::get('/cetagory/{id}','SototabazarController@product_by_cetagory');
Route::get('/contact','SototabazarController@show_contact_form');
Route::get('/about','SototabazarController@about');

Route::group(['middleware' => ['CheakLoginMiddleware']], function () { 

	Route::get('/acountregister','AcccountController@index')->name('account.register');
	Route::post('/account-register','AcccountController@create')->name('account-register');
	
	Route::get('/checkout-login','CheckOutController@show_login_from')->name('checkout.login');
	Route::get('/checkout-register','CheckOutController@show_register_from')->name('checkout.register');
	Route::post('/checkout-creat-acount','CheckOutController@creat_acount')->name('checkout-register');
	Route::post('/login-from-cart','CheckOutController@login_from_cart')->name('checkout-login-acount');
});
Route::post('/addToCart', 'CartController@store')->name('cart.add');

Route::get('/checkout','CheckOutController@index')->name('checkout');

Route::group(['middleware' => ['CheckCartMiddlewar']], function () 
{	
	Route::get('/show-cart', 'CartController@index')->name('cart.show');
	Route::get('/cart-delet/{id}', 'CartController@destroy');
	Route::post('cart-update','CartController@update')->name('cart.update');
	Route::get('/shipping-info', 'CheckOutController@shiping_info')->name('shipping.info');
	Route::post('/store-shipping-info','CheckOutController@save_shiping_info')->name('checkout.save.shipping.info');
	Route::get('/payment-info','CheckOutController@show_payment_form')->name('payment.info');
	Route::post('/store-payment-info','CheckOutController@store_payment_form')->name('checkout.save.payment.info');
	Route::get('/cod-order-submit','CheckOutController@COD_payment_submit');
});
Route::get('/complete-order','CheckOutController@complete_order');

Auth::routes();

Route::group(['middleware' => ['AuthenticateMiddleware']], function () {
	
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/profile', 'UserController@index')->name('profile');
	Route::post('/changeInfo', 'UserController@store')->name('changeInfo');
	Route::get('/users', 'UserController@show')->name('users');
	Route::get('/updetUser/{id}', 'UserController@updet_user')->name('updetUser');
	Route::post('updetUserInfo', 'UserController@updet_user_info')->name('updetUserInfo');

	Route::get('/add-cetagory','CetagoryController@add_cetagory');
	Route::post('/cetagory-add','CetagoryController@save_cetagory')->name('cetagory.add');
	Route::get('/cetagory','CetagoryController@menage_cetagory');
	Route::get('/category-edit/{id}','CetagoryController@edit_cetagory');
	Route::get('/category/delete/{id}','CetagoryController@delete_cetagory');
	Route::get('/category/status/{id}','CetagoryController@status_cetagory');
	Route::post('/cetagory-updet','CetagoryController@updey_cetagory');

	Route::get('/add-brand','BrandController@add_brand');
	Route::post('/brand-add','BrandController@save_brand')->name('brand.add');
	Route::get('/brands','BrandController@menage_brand');
	Route::get('/brand-edit/{id}','BrandController@edit_brand');
	Route::post('/brand-updet','BrandController@update_brand')->name('brand.update');
	Route::get('/brand/status/{id}','BrandController@status_brand');
	Route::get('/brand/delete/{id}','BrandController@delete_brand');

	Route::get('/add-product', 'ProductController@add_product');
	Route::post('/product-add', 'ProductController@save_product')->name('produc.add');
	Route::get('/products', 'ProductController@menage_product');
	Route::get('/Product/status/{id}', 'ProductController@status_product');
	Route::get('/Product-edit/{id}', 'ProductController@edit_product');
	Route::post('/product-update', 'ProductController@update_product')->name('produc.update');
	Route::post('/product-images-add', 'ProductController@add_product_images')->name('add.produc.images');
	Route::get('/Product/delete/{id}', 'ProductController@delete_product');

	Route::get('/orders', 'OrderController@index');
	Route::get('/ordersMenage', 'OrderController@menage');
	Route::get('/order/view/{id}', 'OrderController@show_orders');
	Route::get('/order/edit/{id}', 'OrderController@edit_orders');
	Route::post('order.details.update','OrderController@orders_qty_update')->name('order.details.update');
	Route::post('order.status.update','OrderController@orders_status_update')->name('order.status.update');
	Route::get('/order/invoice/{id}', 'OrderController@show_order_invoise');
	Route::get('/order/download/{id}', 'OrderController@downlod_order_invoise');
	Route::get('/E-mail-send', 'EmailController@create');
	Route::post('/post-E-mail', 'EmailController@store')->name('post.email');
	Route::get('/E-mail-inbox', 'EmailController@index');
	Route::get('/E-mail-details', 'EmailController@show');
});
Route::get('/districts', 'OrderController@districts');
Route::get('/c/{id}', 'OrderController@upazilas');

Route::get('/22', function() {
	
    return view('email.message1');
});
