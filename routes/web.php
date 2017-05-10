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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'usuario'], function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/profile/{id}', 'UserController@getProfile')->name('user.profile');
    Route::get('/create', 'UserController@getCreate')->name('user.getCreate');
    Route::post('/create', 'UserController@postCreate')->name('user.postCreate');
    Route::get('/edit/{id}', 'UserController@getEdit')->name('user.getEdit');
    Route::put('/edit/{id}', 'UserController@putEdit')->name('user.putEdit');
    Route::delete('/delete', 'UserController@delete')->name('user.delete');
});

Route::group(['prefix' => 'noticia'], function () {
    Route::get('/', 'NoticiaController@index')->name('noticia.index');
    Route::get('/profile/{id}', 'NoticiaController@getProfile')->name('noticia.profile');
    Route::get('/create', 'NoticiaController@getCreate')->name('noticia.getCreate');
    Route::post('/create', 'NoticiaController@postCreate')->name('noticia.postCreate');
    Route::get('/edit/{id}', 'NoticiaController@getEdit')->name('noticia.getEdit');
    Route::put('/edit/{id}', 'NoticiaController@putEdit')->name('noticia.putEdit');
    Route::delete('/delete', 'NoticiaController@delete')->name('noticia.delete');
});

Route::group(['prefix' => 'minicursos'], function () {
    Route::get('/', 'MinicursoController@index')->name('minicurso.index');
    Route::get('/profile/{id}', 'MinicursoController@getProfile')->name('minicurso.profile');
    Route::get('/create', 'MinicursoController@getCreate')->name('minicurso.getCreate');
    Route::post('/create', 'MinicursoController@postCreate')->name('minicurso.postCreate');
    Route::get('/edit/{id}', 'MinicursoController@getEdit')->name('minicurso.getEdit');
    Route::put('/edit/{id}', 'MinicursoController@putEdit')->name('minicurso.putEdit');
    Route::delete('/delete', 'MinicursoController@delete')->name('minicurso.delete');
});

Route::group(['prefix' => 'palestras'], function () {
    Route::get('/', 'PalestraController@index')->name('palestra.index');
    Route::get('/profile/{id}', 'PalestraController@getProfile')->name('palestra.profile');
    Route::get('/create', 'PalestraController@getCreate')->name('palestra.getCreate');
    Route::post('/create', 'PalestraController@postCreate')->name('palestra.postCreate');
    Route::get('/edit/{id}', 'PalestraController@getEdit')->name('palestra.getEdit');
    Route::put('/edit/{id}', 'PalestraController@putEdit')->name('palestra.putEdit');
    Route::delete('/delete', 'PalestraController@delete')->name('palestra.delete');
});