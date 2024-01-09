<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('page/{slug}/{language?}', function ($slug, $language = 'en') {
    // routing logic here
    return "Slug: $slug, Language: $language";
})->where([
    'slug' => '[a-z-]+',
    'language' => '[a-zA-Z]{2}'
]);
