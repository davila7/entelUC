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

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/home1', function()
{
	return View::make('home.home1');
});

Route::get('/home2', function()
{
	return View::make('home.home2');
});


Route::get('/home3', function()
{
	return View::make('home.home3');
});

Route::get('/home4', function()
{
	return View::make('home.home4');
});