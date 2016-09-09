<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware'=>'web'],function(){
Route::auth();
 Route::get('/',['uses'=>'AuthController@index',
               'as'=>'index']);

Route::get('/logout',['uses'=>'AuthController@getlogout',
                    'as'=>'adminlogout']);
Route::get('/login',['uses'=>'AuthController@getLogin',
                     'as'=>'adminlogin']);
Route::post('/login',['uses'=>'AuthController@postlogin',
                     'as'=>'adminlogin'
                     ]);
Route::get('/home',['uses'=>'AuthController@getdashboard','as'=>'dashboard',
                    'middleware'=>'auth',
                     'middleware'=>'roles',
                      'roles'=>['admin']
                   ]);   
Route::post('/home',['uses'=>'AuthController@assignrole','as'=>'assignrole',
                    'middleware'=>'auth',
                     'middleware'=>'roles',
                      'roles'=>['admin']
                   ]);   
});
