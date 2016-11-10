<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::group(['prefix' => 'fund'], function () {

    Route::put('updaterisk/{id}/{newriskrate}', ['success' => 'FundController@updateRisk']);

    Route::put('updatemoneyamount/{id}/{newriskrate}', ['success' => 'FundController@updateRisk']);

    Route::get('/', 'FundController@index');
});

Route::group(['prefix' => 'client'], function () {

    Route::get('/', 'ClientController@index');
});

Route::group(['prefix' => 'fundMonetise'], function () {

    Route::get('/', 'FundMonetiseController@index');
});

Route::group(['prefix' => 'investment'], function () {

    Route::get('/', 'InvestmentController@index');

    Route::post('/', 'InvestmentController@save');
});

Route::get('/', function (){
    \App\Services\FundOperations::calculateRisk(11);
});



Route::any('{catchall}', function () {
    //some code
    return View::make('index');
})->where('catchall', '.*');