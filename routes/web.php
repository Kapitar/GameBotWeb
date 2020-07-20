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

Route::get(
	'/',
	'HomeController@index'
)->name('index');

Route::get(
	'home',
	'HomeController@home'
)->name('home');

Route::get(
	'u/{id}',
	'ProfileController@showProfile'
)->name('profile');

Route::get(
	'profile404',
	'ProfileController@error404'
)->name('profile404');

Route::get(
	'u/{id}',
	'ProfileController@showProfile'
)->name('profile');

Route::get(
	'rating',
	'RatingController@rating'
)->name('rating');

Route::get(
	'loadRating',
	'RatingController@loadRating'
)->name('loadRating');

Route::get(
	'auth',
	'VkController@auth'
)->name('vk_auth');

Route::get(
	'logout',
	'HomeController@logout'
)->name('logout');
