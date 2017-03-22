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
    return view('welcome');
});

//策略模式
Route::get('/strategy', 'StrategyController@index');
//观察者模式
Route::get('/observer', 'ObserverController@index');
//装饰器模式
Route::get('/decorator', 'DecoratorController@index');
//命令模式
Route::get('/command', 'CommandController@index');