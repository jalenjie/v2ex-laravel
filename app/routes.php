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
Route::get('signin',array('uses' => 'HomeController@showLogin'));
//显示注册界面
Route::get('signup',array('uses' => 'HomeController@showRegister'));
//提交登录信息
Route::post('login',array('uses' => 'HomeController@doLogin'));

//登出
Route::get('logout', array('uses' => 'HomeController@doLogout'));