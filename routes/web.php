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

# match 匹配路由
Route::match(['get','post'],'admin/index', function (){
    dump('这是amdin/index的内容');
});

# 带参数路由，加？表示可选参数
Route::get('member/{mid?}',function ($mid){
    echo $mid;
});

Route::resource('role','Admin\RoleController');

Route::get('goods/index','Admin\GoodsController@index');
Route::get('index', "IndexController@index");