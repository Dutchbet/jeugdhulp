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
    return view('reflecties/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('reflecties/reflectie1', 'ReflectieController@reflectie1')->name('Reflectie vraag 1');
Route::post('reflecties/reflectie1', 'ReflectieController@reflectie1')->name('Reflectie vraag 1');
Route::get('reflecties/reflectie2', 'ReflectieController@reflectie2')->name('Reflectie vraag 2');
Route::post('reflecties/reflectie2', 'ReflectieController@reflectie2')->name('Reflectie vraag 2');
Route::get('reflecties/reflectie3', 'ReflectieController@reflectie3')->name('Reflectie vraag 3');
Route::post('reflecties/reflectie3', 'ReflectieController@reflectie3')->name('Reflectie vraag 3');
Route::get('reflecties/reflectie4', 'ReflectieController@reflectie4')->name('Reflectie vraag 4');
Route::post('reflecties/reflectie4', 'ReflectieController@reflectie4')->name('Reflectie vraag 4');
Route::get('reflecties/reflectie5', 'ReflectieController@reflectie5')->name('Reflectie vraag 5');
Route::post('reflecties/reflectie5', 'ReflectieController@reflectie5')->name('Reflectie vraag 5');
Route::get('reflecties/reflectie6', 'ReflectieController@reflectie6')->name('Reflectie vraag 6');
Route::post('reflecties/reflectie6', 'ReflectieController@reflectie6')->name('Reflectie vraag 6');
Route::get('reflecties/reflectie7', 'ReflectieController@reflectie7')->name('Reflectie vraag 7');
Route::post('reflecties/reflectie7', 'ReflectieController@reflectie7')->name('Reflectie vraag 7');
Route::get('reflecties/reflectie8', 'ReflectieController@reflectie8')->name('Reflectie vraag 8');
Route::post('reflecties/reflectie8', 'ReflectieController@reflectie8')->name('Reflectie vraag 8');
Route::get('reflecties/reflectie9', 'ReflectieController@reflectie9')->name('Reflectie vraag 9');
Route::post('reflecties/reflectie9', 'ReflectieController@reflectie9')->name('Reflectie vraag 9');
Route::get('reflecties/reflectie10', 'ReflectieController@reflectie10')->name('Reflectie vraag 10');
Route::post('reflecties/reflectie10', 'ReflectieController@reflectie10')->name('Reflectie vraag 10');
Route::get('reflecties/overzicht', 'ReflectieController@overzicht')->name('overzicht');
Route::resource('reflecties','ReflectieController');
