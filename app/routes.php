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

Route::get('/','HomeController@Index');

Route::get('/admin','UserController@IndexAdmin');

//user
Route::get('user/list','UserController@GridUser');
Route::any('user/edit','UserController@CrudUser');
Route::any('user/create','UserController@CrudUser');
//categories
Route::get('categories/list','CategoriesController@GridCategories');
Route::any('categories/edit','CategoriesController@CrudCategories');
Route::any('categories/create','CategoriesController@CrudCategories');
//subcategories
Route::get('subcategories/list','SubCategoriesController@GridSubCategories');
Route::any('subcategories/edit','SubCategoriesController@CrudSubCategories');
Route::any('subcategories/create','SubCategoriesController@CrudSubCategories');
//options
Route::get('options/list','OptionsController@GridOptions');
Route::any('options/edit','OptionsController@CrudOptions');
Route::any('options/create','OptionsController@CrudOptions');
//ajax
Route::get('/getOptions/{id}','HomeController@GetOptions');
Route::get('/getImage/{id}','HomeController@GetImage');