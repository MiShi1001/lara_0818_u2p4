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
    return'welcome';
});

Route::get('/',function(){
    returnview('welcome.blade');
});

Route::get('/',function(){
    returnredirect('welcome.blade');
});
Route::get('hello/{name}',function($name){
    return'Hello,'.$name;
});

Route::get('hello/{name?}',['as'=>'hello.index',function($name= 'Everybody'){
    return'Hello,'.$name;
}]);
