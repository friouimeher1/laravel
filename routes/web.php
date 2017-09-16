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
Route::get('/',function(){
  $c=App\Customer::all();
  return view('welcome',compact('c'));
});
Route::get('/login','HomeController@index');
Route::get('/home', 'HomeController@index');
//Route::get('/welcome1',)

Route::resource('/welcome', 'WelcomeController');
Route::get('/front',function(){
  return view('auth.front.index');
});
Route::get('/cart',function(){
  return view('auth.front.cart');
});
Route::get('/checkout',function(){
  return view('auth.front.checkout');
});
Route::get('/shop',function(){
  return view('auth.front.shop');
});
Route::get('/single',function(){
  return view('auth.front.single-product');
});


//Route::get('/detaille', 'WelcomeController@show1')->name('cool');

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');


});

Route::group(['middleware' => 'admin'], function () {
  Route::resource('admin/Categorie','AdminAuth\GererCategorieController');
  Route::resource('admin/User','AdminAuth\GererUserController');
  Route::resource('admin/Customer','AdminAuth\GererCustomerController');
});

Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');

});
Route::group(['middleware' => 'customer'], function () {
      Route::resource('customer/produit',  'CustomerAuth\ProduitController');
});
