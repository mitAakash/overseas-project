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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
// Route::get('/blog', function () {
//     return view('blog');
// });
Route::get('/single', function () {
    return view('single');
});
Route::get('/team', function () {
    return view('team');
});
// Route::get('/portfolio', function () {
//     return view('portfolio');
// });
Route::get('/contact', function () {
    return view('contact');
});
