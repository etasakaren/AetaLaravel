<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@getHome');
Route::get('/submitarticle', 'PagesController@getSubmitArticle');
Route::get('/articles', 'ArticlesController@getArticle');
Route::post('/submitarticle/submit', 'ArticlesController@submit');