<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//显示登录界面
/*Route::get('signin',array('uses' => 'HomeController@showLogin'));*/
//显示注册界面
/*Route::get('signup',array('uses' => 'HomeController@showRegister'));
//提交登录信息
Route::post('signin',array('uses' => 'HomeController@doLogin'));
//提交注册信息
Route::post('signup',array('uses' => 'HomeController@doRegister'));
//登出
Route::get('signout', array('uses' => 'HomeController@doLogout'));*/

//用户登陆注册验证
Route::controller('users','AuthController');

//首页
Route::get('/',function(){

	echo "hello";
});


//后台登陆
Route::controller('admin','Admin\AuthController');