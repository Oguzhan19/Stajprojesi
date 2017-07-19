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

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');//to see the main page with all articles(INDEX.BLADE)
Route::get('/articles/edit/{id}','ArticlesController@edit');//to edit your profile(the id of article)(EDIT.BLADE)
Route::get('/myarticles/{id}','ArticlesController@showmyarticles');//to see my articlesBLADE(the id of user)(MYARTICLES)
Route::get('/articles/{id}','ArticlesController@show');//to see a specific article(the id of article)(SHOW.BLADE)
Route::get('/articles/create/{id}','ArticlesController@create');//Create new article-(the id of user)(CREATE.BLADE)
Route::get('/seeprofile/show/{id}','ArticlesController@seeprofile');//bir kullanıcının profilini görmek için(SEEPROFILE.BLADE)
Route::get('/index','ArticlesController@index');//to go to main page(INDEX.BLADE)
Route::resource('articles','ArticlesController');
Route::resource('user','UserController');