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


Route::get('/admin', 'admincontroller@index');
Route::get('/messages', 'admincontroller@messages');
Route::get('/tasks', 'admincontroller@tasks');
Route::get('/ui', 'admincontroller@ui');
Route::get('/widgets', 'admincontroller@widgets');
Route::get('/submenu', 'admincontroller@submenu');
Route::get('/submenu2', 'admincontroller@submenu2');
Route::get('/submenu3', 'admincontroller@submenu3');
Route::get('/form', 'admincontroller@form');
Route::get('/charts', 'admincontroller@charts');
Route::get('/typography', 'admincontroller@typography');
Route::get('/gallery', 'admincontroller@gallery');
Route::get('/tables', 'admincontroller@tables');
Route::get('/calendar', 'admincontroller@calendar');
Route::get('/filemanager', 'admincontroller@filemanager');
Route::get('/icons', 'admincontroller@icons');
Route::get('/login', 'admincontroller@login');



