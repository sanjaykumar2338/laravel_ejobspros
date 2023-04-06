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
Route::get('/home', [HomeController::class, 'index']);

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
Route::get('/digital-marketing/social-media-marketing-smm', [GetQuoteController::class, 'search_media_marketing_smm']);
Route::get('/digital-marketing/local-marketing', [GetQuoteController::class, 'local_marketing']);
Route::get('/digital-marketing/content-marketing', [GetQuoteController::class, 'content_marketing']);
Route::get('/contact-website-design-and-digital-marketing-professionals', [GetQuoteController::class, 'digital_marketing_professionals']);
Route::get('/web-design/website', [GetQuoteController::class, 'website']);
Route::get('/web-design/landing-page', [GetQuoteController::class, 'landing_page']);
Route::get('/web-design/social-shop', [GetQuoteController::class, 'social_shop']);
Route::get('/web-design/marketing-automation', [GetQuoteController::class, 'marketing_automation']);
Route::get('/web-design/campaign-design', [GetQuoteController::class, 'campaign_design']);
Route::get('/web-design/e-catalog-inventory', [GetQuoteController::class, 'e_catalog_inventory']);

//main Controller
Route::get('/aboutus', [MainController::class, 'aboutus']);

//Auth routes
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    Route::get('/home', 'HomeController@index');
    Route::group(['middleware' => ['guest']], function() {
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function() {      
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });


    Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.index');
});


//customer routes
Route::group(['namespace' => 'App\Http\Controllers'], function(){ 
    Route::get('/dashboard/customer', 'CustomerController@index');
    Route::get('/dashboard/customer/my-request', 'CustomerController@my_request');
})->middleware('auth');

//admin routes
Route::group(['namespace' => 'App\Http\Controllers','middleware' => ['IsAdmin']], function(){ 
    Route::get('/dashboard/admin', 'AdminMainController@index');
    Route::get('/dashboard/admin/users/list', 'AdminMainController@all_users');
});