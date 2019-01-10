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

Route::get('/',[
    'as' => 'articles.index',
    'uses' => 'PagesController@index']);

Route::get('/articles','ArticlesController@index');

Route::get('/articles/create',[
    'as' => 'articles.create',
    'uses' => 'ArticlesController@create'
]);

Route::post('/articles', [
    'as' => 'articles.store',
    'uses' => 'ArticlesController@store'
]);

Route::get('/article/{id}/edit',[
    'as' => 'article.edit',
    'uses' =>  'ArticlesController@edit'
]);

Route::put('/article/{id}', [
    'as' => 'article.update',
    'uses' => 'ArticlesController@update'
]);

Route::get('/article/{id}',[
    'as' => 'article.show',
    'uses' =>  'ArticlesController@showArticle'
]);
