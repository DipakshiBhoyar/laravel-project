<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {    return view('welcome');
});
// Route::get('portfolio', function () {
//     return view('portfolio');

// });
Route::get('portfolio',[PageController::class,'portfolio']);
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

