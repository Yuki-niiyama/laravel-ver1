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

//Route::get　どのURLの時に何をするか
// どのURLの時に何をするのかを決めるのがルート（ルーティング）の仕事
//（’/’）はドメインのみできたときの意味

Route::get('/', function () {
    //関数viewは中身を返す
    return view('welcome');
});

Route::get('/list', 'TaskContoller@index');

Route::get('/tasks/create', 'TaskContoller@create');

Route::post('/tasks/store', 'TaskContoller@store');

Route::get('/comment', 'commentContoller@index');

Route::get('/follower', 'FollowerContoller@index');

Route::get('/tasks/{id}/edit', 'TaskContoller@edit');


