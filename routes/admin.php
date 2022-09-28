<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/', function () {
        return view('Admin/index');
    })->name('adminHome');

    #### Admins ####
    Route::resource('admins','AdminController');
    Route::POST('delete_admin','AdminController@delete')->name('delete_admin');
    Route::get('my_profile','AdminController@myProfile')->name('myProfile');


    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');

############################################################################################


   ### Category #######


   Route::resource('category','CategoryController');
    Route::POST('delete_category','CategoryController@delete')->name('delete_category');


###### AboutUs#####
    Route::get('aboutUs','About_usController@aboutUs')->name('aboutUs.index');
    Route::post('updateAbout','About_usController@updateAbout')->name('aboutUs.update');

 ###### العقارات #######

    Route::resource('real_estate','RealEstateController');
    Route::POST('real_estate/delete','RealEstateController@delete')->name('delete_real_estate');


####  اتصل بنا ####
    Route::resource('contact_us','ContactUsController');
    Route::POST('contact_us/delete','ContactUsController@delete')->name('delete_contact_us');




    ###### SocialMedia #####
    Route::get('SocialMedia','SocialmediaController@index')->name('admin.social');
    Route::post('updateSocialMedia/{id}','SocialmediaController@update')->name('social.update');





    ####### users ######

    Route::resource('users','UserController');
    Route::POST('delete_user','UserController@delete')->name('delete_user');
//    Route::get('my_profile','AdminController@myProfile')->name('myProfile');



});










