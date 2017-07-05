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

use Illuminate\Support\Facades\Route;




Route::get('/','PagesController@index')->name('pages.index');
Route::get('/pages','PagesController@adminIndex')->name('pages.admin');
Route::get('/profile/{id}', 'PagesController@getProfile')->name('pages.profile')->middleware('seguranca');
Route::get('/create', 'PagesController@getCreate')->name('pages.getCreate')->middleware('seguranca');
Route::post('/create', 'PagesController@postCreate')->name('pages.postCreate')->middleware('seguranca');
Route::get('/edit/{id}', 'PagesController@getEdit')->name('pages.getEdit')->middleware('seguranca');
Route::put('/edit/{id}', 'PagesController@putEdit')->name('pages.putEdit')->middleware('seguranca');
Route::delete('/delete', 'PagesController@delete')->name('pages.delete')->middleware('seguranca');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::group(['prefix' => 'usuario'], function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/profile/{id}', 'UserController@getProfile')->name('user.profile');
    Route::get('/create', 'UserController@getCreate')->name('user.getCreate')->middleware('seguranca');
    Route::post('/create', 'UserController@postCreate')->name('user.postCreate')->middleware('seguranca');
    Route::get('/edit/{id}', 'UserController@getEdit')->name('user.getEdit')->middleware('seguranca');
    Route::put('/edit/{id}', 'UserController@putEdit')->name('user.putEdit')->middleware('seguranca');
    Route::delete('/delete', 'UserController@delete')->name('user.delete')->middleware('seguranca');
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', 'UserController@adminIndex')->name('admin.index');
});

Route::group(['prefix' => 'noticia'], function () {
    Route::get('/', 'NoticiaController@index')->name('noticia.index');
    Route::get('/profile/{id}', 'NoticiaController@getProfile')->name('noticia.profile')->middleware('seguranca');
    Route::get('/create', 'NoticiaController@getCreate')->name('noticia.getCreate')->middleware('seguranca');
    Route::post('/create', 'NoticiaController@postCreate')->name('noticia.postCreate')->middleware('seguranca');
    Route::get('/edit/{id}', 'NoticiaController@getEdit')->name('noticia.getEdit')->middleware('seguranca');
    Route::put('/edit/{id}', 'NoticiaController@putEdit')->name('noticia.putEdit')->middleware('seguranca');
    Route::delete('/delete', 'NoticiaController@delete')->name('noticia.delete')->middleware('seguranca');
});

Route::group(['prefix' => 'minicursos'], function () {
    Route::get('/', 'MinicursoController@index')->name('minicurso.index');
    Route::get('/profile/{id}', 'MinicursoController@getProfile')->name('minicurso.profile')->middleware('seguranca');
    Route::get('/create', 'MinicursoController@getCreate')->name('minicurso.getCreate')->middleware('seguranca');
    Route::post('/create', 'MinicursoController@postCreate')->name('minicurso.postCreate')->middleware('seguranca');
    Route::get('/edit/{id}', 'MinicursoController@getEdit')->name('minicurso.getEdit')->middleware('seguranca');
    Route::put('/edit/{id}', 'MinicursoController@putEdit')->name('minicurso.putEdit')->middleware('seguranca');
    Route::delete('/delete', 'MinicursoController@delete')->name('minicurso.delete')->middleware('seguranca');
    Route::get('/{id}/inscricao', 'MinicursoController@inscricao')->name('minicurso.inscricao');
});

Route::group(['prefix' => 'palestras'], function () {
    Route::get('/', 'PalestraController@index')->name('palestra.index');
    Route::get('/profile/{id}', 'PalestraController@getProfile')->name('palestra.profile')->middleware('seguranca');
    Route::get('/create', 'PalestraController@getCreate')->name('palestra.getCreate')->middleware('seguranca');
    Route::post('/create', 'PalestraController@postCreate')->name('palestra.postCreate')->middleware('seguranca');
    Route::get('/edit/{id}', 'PalestraController@getEdit')->name('palestra.getEdit')->middleware('seguranca');
    Route::put('/edit/{id}', 'PalestraController@putEdit')->name('palestra.putEdit')->middleware('seguranca');
    Route::delete('/delete', 'PalestraController@delete')->name('palestra.delete')->middleware('seguranca');
    Route::get('/{id}/inscricao', 'PalestraController@inscricao')->name('palestra.inscricao');
});
