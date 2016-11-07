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


Route::group(['namespace' => 'Fund', 'prefix' => 'fund'], function() {
    // Controllers Within The "App\Http\Controllers\Fund" Namespace
    Route::put('updaterisk/{id}/{newriskrate}', ['success' => 'FundController@updateRisk']);

    Route::put('updatemoneyamount/{id}/{newriskrate}', ['success' => 'FundController@updateRisk']);

    Route::get('/', ['funds' => 'FundController@index']);

});

Route::group(['namespace' => 'Fund', 'prefix' => 'client'], function() {
    // Controllers Within The "App\Http\Controllers\client" Namespace
    Route::get('', ['clients' => 'ClientController@index']);
});

Route::any('{catchall}', function() {
    //some code
    return View::make('index');
})->where('catchall', '.*');