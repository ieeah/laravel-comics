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

Route::get('/', function () {
	//importing data from config files
	$comics = config('comics');
	$socials = config('social_icons');

	return view('home', [
		'comics' => $comics,
		'social_icons' => $socials,
	]);
})->name('comics');

Route::get('/news', function () {

	$socials = [
		[
			'url' => 'https://facebook.com',
			'img' => 'fab fa-facebook-f',
		],
		[
			'url' => 'https://twitter.com/',
			'img' => 'fab fa-twitter',
		],
		[
			'url' => 'https://www.youtube.com',
			'img' => 'fab fa-youtube',
		],
		[
			'url' => 'https://www.pinterest.it/',
			'img' => 'fab fa-pinterest-p',
		],
		[
			'url' => 'https://www.pscp.tv/',
			'img' => 'fab fa-periscope',
		],
	];
	return view('news', [
		'social_icons' => $socials,
	]);
})->name('news');

Route::get('/comic/{id}', function ($id) {
	$comics = config('comics');
	$socials = config('social_icons');
	$comic = $comics[$id];

	return view('comic', [
		'fumetto' => $comic,
		'social_icons' => $socials,
	]);
})->name('comic');

