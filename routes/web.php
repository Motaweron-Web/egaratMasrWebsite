<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;










//Route::get('egaratMasr','Site/SiteController@index');

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
//
//
//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
//    ], function () {
//
//    Route::get('/', 'Site\HomeController@index')->name('/');
//
//############# User Auth ##################
//    Route::get('register', 'Site\AuthController@register')->name('register');
//    Route::POST('UserRegistration', 'Site\AuthController@UserRegistration')->name('UserRegistration');
//    Route::get('login', 'Site\AuthController@login')->name('login');
//    Route::post('postLogin', 'Site\AuthController@postLogin')->name('postLogin');
//
//    Route::group(['middleware' => 'auth:user', 'namespace' => 'Site'], function () {
//        Route::get('logout', 'AuthController@logout')->name('logout');
//        Route::get('profile', 'AuthController@profile')->name('profile');
//        Route::post('edit/myProfile','AuthController@editProfile')->name('admin.edit.myProfile');
//        Route::post('edit/myPassword','AuthController@editPassword')->name('admin.edit.myPassword');
//        Route::get('delete/myProfile','AuthController@deleteMyProfile')->name('admin.deleteMyProfile');
//
//
//        });
//
//
//
//
//        ##### Payment ####
//        Route::get('checkPay', 'HomeController@checkPay')->name('checkPay');
//        Route::get('pointsPrices/{id}', 'HomeController@pointsPrices')->name('pointsPrices');
//
//
//
//});

//
//##### No Need To Lang
//Route::post('checkUserView', 'Site\FacebookController@checkUserView')->name('checkUserView');
//
//






Route::get('/','SiteController@index')->name('site_egareat_egypt');

Route::get('filter/estateByDate','SiteController@estateByDate')->name('estateByDate');



 ###### users ###########

   Route::get('register','UserController@register')->name('register');
   Route::get('handleRegister','UserController@handleRegister')->name('handleRegister');


   Route::get('login','UserController@login')->name('login');
   Route::get('handleLogin','UserController@handleLogin')->name('handleLogin');


### contact Us #####
  Route::get('contactUs','ContactUsController@index')->name('contactUs');
  Route::post('contactUs/store','ContactUsController@store')->name('contactUs.store');


  ## about Us  ####
Route::get('aboutUs','AboutUsController@index')->name('aboutUs');


 ## Real Details ###
Route::get('details/{id}','SiteController@details')->name('details');

Route::get('getAllRealEstate','SiteController@getAllRealEstate')->name('getAllRealEstate');


###  Reservation #######
  Route::get('store/reservation','ReservationController@create')->name('makeReservation');
  Route::get('index/reservation}','ReservationController@index')->name('index.reservation');


  ## get realEstate by category #####
  Route::get('realEstateByCategory/{id}','SiteController@realEstateByCategory')->name('realEstateByCategory');

 ## category views ####
  Route::get('categorydetails/{id}','SiteController@categorydetails')->name('categorydetails');




Route::group(['middleware'=>'loged'],function () {

    Route::get('login','UserController@login')->name('login');


});




Route::get('/','SiteController@index')->name('site_egareat_egypt');


Route::group(['middleware'=>'user'],function () {


    Route::get('myProfile','UserController@myProfile')->name('user.myProfile');



    Route::get('logout','UserController@logout')->name('logout');


   Route::post('update/user/image/{id}','UserController@updateImage')->name('user.updateImage');



});



