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

Route::group(['middleware' => 'web'], function () {
    Route::match(['get','post'], '/', [
        'uses' => "IndexController@execute", 'as'=>'home'
    ]);
    Route::get('/page/{alias}', [
        "uses"=>'PageController@execute', 'as'=>'page'
    ])->where('alias', '[A-Za-z]+');
    Route::auth();
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function () {
    Route::get('/', function () {

    });

    Route::group(['prefix'=>'portfolios'] ,function () {
        Route::get('/', ['uses'=>'PortfolioController@execute', 'as'=>'portfolio']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PortfolioController@execute', 'as'=>'portfolioAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses'=>'PortfolioEditController@execute', 'as'=>'portfolioEdit' ]);
    });
});



