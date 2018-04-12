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
});

Route::get('/single-product/{id}','SototabazarController@show_single_product');
Route::get('/contact','SototabazarController@show_contact_form');
Route::get('/product-by-Cetagory/{id}','SototabazarController@productsbyCetegory');
Route::get('/about','SototabazarController@about');

Route::post('/addToCart', 'CartController@store')->name('cart.add');
Route::get('/show-cart', 'CartController@index');
Route::get('/cart-delet/{id}', 'CartController@destroy');
Route::post('cart-update','CartController@update')->name('cart.update');

Route::get('/checkout','CheckOutController@index');
Route::post('/checkout-creat-acount','CheckOutController@Creat_acount')->name('checkouk.creat.acount');
Route::post('/login-from-cart','CheckOutController@login_from_cart')->name('checkouk.login.acount');

Route::get('/shipping-info', 'CheckOutController@shiping_info');
Route::post('/store-shipping-info','CheckOutController@store_shiping_info')->name('checkouk.save.shipping.info');

Route::get('/payment-info','CheckOutController@show_payment_form');
Route::post('/store-payment-info','CheckOutController@store_payment_form')->name('checkouk.save.payment.info');
Route::get('/cod-order-submit','CheckOutController@COD_payment_submit');
Route::get('/complete-order','CheckOutController@complete_order');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/Product/delete/{id}', 'ProductController@delete_product');

Route::get('/orders', 'OrderController@index');
Route::get('/order/invoice/{id}', 'OrderController@show_order_invoise');
Route::get('/order/download/{id}', 'OrderController@downlod_order_invoise');
