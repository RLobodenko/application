<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleContoller;
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

Route::get('/', [ExampleContoller::class, "homepage"]);

Route::get('/about', [ExampleContoller::class, "aboutPage"]);
