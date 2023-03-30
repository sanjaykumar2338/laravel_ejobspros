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
Route::post('/post_appointment', [GetQuoteController::class, 'post_appointment']);
Route::get('/analysis/appointment', [GetQuoteController::class, 'appointment']);

Route::get('/free-consultation/get-a-quote', [GetQuoteController::class, 'index']);
Route::get('/free-consultation/get-a-proposal', [GetQuoteController::class, 'proposal']);

Route::get('/digital-solutions/social-e-commerce', [GetQuoteController::class, 'social_e_commerce']);
Route::get('/digital-solutions/pay-per-performance', [GetQuoteController::class, 'pay_per_performance']);
Route::get('/digital-solutions/branding', [GetQuoteController::class, 'branding']);
Route::get('/digital-solutions/branding', [GetQuoteController::class, 'branding']);

Route::get('/web-design', [GetQuoteController::class, 'web_design']);
Route::get('/web-design', [GetQuoteController::class, 'web_design']);
Route::get('/digital-solutions', [GetQuoteController::class, 'digital_solutions']);
Route::get('/digital-marketing', [GetQuoteController::class, 'digital_marketing']);
Route::get('/seo-resources', [GetQuoteController::class, 'seo_resources']);
Route::get('/free-consultation', [GetQuoteController::class, 'free_consultation']);

Route::get('/digital-solutions/success-essentials', [GetQuoteController::class, 'success_essentials']);
Route::get('/digital-solutions/competitive-edge', [GetQuoteController::class, 'success_essentials']);
Route::get('/digital-solutions/social-ecommerce', [GetQuoteController::class, 'social_ecommerce']);
Route::get('/digital-solutions/pay-per-lead', [GetQuoteController::class, 'pay_per_lead']);
Route::get('/digital-solutions/pay-per-performance-2', [GetQuoteController::class, 'pay_per_performance2']);
Route::get('/digital-solutions/pay-per-performance-2', [GetQuoteController::class, 'pay_per_performance2']);
Route::get('/digital-solutions/branding2', [GetQuoteController::class, 'branding2']);
Route::get('/digital-solutions/maintenance', [GetQuoteController::class, 'maintenance']);

Route::get('/seo-resources/website-audit', [GetQuoteController::class, 'website_audit']);
Route::get('/seo-resources/competitor-analysis', [GetQuoteController::class, 'competitor_analysis']);
Route::get('/seo-resources/website-speed', [GetQuoteController::class, 'website_speed']);
Route::get('/contact-us', [GetQuoteController::class, 'contact_us']);
Route::post('/contact-us-save', [GetQuoteController::class, 'contact_us_save']);
Route::get('/coupon', [GetQuoteController::class, 'coupon']);
Route::get('/terms-of-use', [GetQuoteController::class, 'terms_of_use']);
Route::get('/portfolio', [GetQuoteController::class, 'portfolio']);
Route::get('/industries', [GetQuoteController::class, 'industries']);
Route::get('/privacy-policy', [GetQuoteController::class, 'privacy_policy']);


Route::get('/digital-marketing/search-engine-optimization-seo', [GetQuoteController::class, 'search_engine_optimization_seo']);

//Main Controller
Route::get('/aboutus', [MainController::class, 'aboutus']);
