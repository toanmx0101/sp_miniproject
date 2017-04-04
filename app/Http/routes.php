<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StaticPagesController@index');


Route::get('/signup',function(){
	return view('account.signup');
});

Route::get('/shoppingcart','CartController@show');

Route::get('/specials',function(){
	return view('specials');
});
Route::get('/delivery',function(){
	return view('delivery');
});
Route::get('/product',function(){
	return view('products.show');
});
Route::get('/category/{url}','CategoryController@index');
Route::get('/products/{product_id}','ProductController@index');


Route::get('/contact',function(){
	return view('contact');
});
Route::get('/review','ReviewController@show');
Route::get('query/select-categories', function(){
	$data = DB::table('categories')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/select-categories-name', function(){
	$data = App\Category::all()->toArray();
	return view('query',compact('data'));
});

Route::get('admin/dashboard','Admin\DashboardController@index');


Route::get('/login','UserController@login');
Route::post('/login','UserController@postLogin');


Route::get('authentication/getRegister',['as'=>'getRegister','uses'=>'Auth\AuthController@getRegister']);


Route::post('authentication/postRegister',['as'=>'postRegister','uses'=>'Auth\AuthController@postRegister']);

Route::get('authentication/getLogin',['as'=>'getLogin','uses'=>'Auth\AuthController@getLogin']);


Route::post('authentication/postLogin',['as'=>'postLogin','uses'=>'Auth\AuthController@postLogin']);


Route::auth();

Route::get('/home', 'HomeController@index');


Route::post('cart/postCart',['as'=>'postCart','uses'=>'ProductController@postCart']);

Route::get('remove_product/{id}','CartController@remove_product');

Route::post('review/postReview',['as'=>'postReview','uses'=>'ReviewController@postReview']);

Route::get('checkout/address','CartController@address');
Route::get('checkout/shipping','CartController@shipping');
Route::get('checkout/success','CartController@success');

Route::get('my-account','UserController@my_account');
Route::get('my-account/history','UserController@order_history');
Route::get('my-account/edit-address','UserController@edit_address');



