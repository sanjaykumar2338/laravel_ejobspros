<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GetQuoteController;
use App\Http\Controllers\MainController;


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

//Home controller 
Route::get('/', [HomeController::class, 'index']);

//GetQuoteController Controller
Route::post('/post_quote', [GetQuoteController::class, 'post_quote']);
Route::get('/free-consultation/get-a-quote', [GetQuoteController::class, 'index']);
Route::get('/digital-solutions/social-e-commerce', [GetQuoteController::class, 'social_e_commerce']);
Route::get('/digital-solutions/pay-per-performance', [GetQuoteController::class, 'pay_per_performance']);
Route::get('/digital-solutions/branding', [GetQuoteController::class, 'branding']);
Route::get('/digital-solutions/branding', [GetQuoteController::class, 'branding']);
Route::get('/web-design', [GetQuoteController::class, 'web_design']);
Route::get('/web-design', [GetQuoteController::class, 'web_design']);
Route::get('/digital-solutions', [GetQuoteController::class, 'digital_solutions']);

//Main Controller
Route::get('/aboutus', [MainController::class, 'aboutus']);
