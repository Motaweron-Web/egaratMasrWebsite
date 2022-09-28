<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

########  Auth   #################

Route::post('/register','ApiUserController@register');
Route::post('/login','ApiUserController@login');

############### End Auth  ##########################



Route::group([ 'middleware' => 'is_api_user'], function () {


     #### log out ##########

    Route::get('/logout','ApiUserController@logout');

    ########  end logout


    ###### RealEstate ##########




    Route::get('/allRealEstate','ApiRealEstateController@index');
    Route::get('/realEstate/{id}','ApiRealEstateController@show');


    ########  end RealESTate


    ############ Reservation    #####################


        Route::post('/reservation/store/{id}','ReservationController@store');
        Route::get('/getReservation/{id}','ReservationController@show');

    ##############  endReservation #####################


});


