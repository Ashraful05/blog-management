<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\Home\HomeSliderController;
use \App\Http\Controllers\Home\AboutController;
use \App\Http\Controllers\Home\PortfolioController;
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
    return view('frontend.index');
});

Route::get('/dashboard', function () {
//    return view('dashboard');
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(AdminController::class)->middleware('auth')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('logout','adminLogout')->name('admin.logout');
        Route::get('profile','adminProfile')->name('admin_profile');
        Route::get('profile/edit/{id}','adminEditProfile')->name('edit_profile');
        Route::post('profile/update/{id?}','adminUpdateProfile')->name('update_profile');
        Route::get('password/change','passwordChange')->name('password_change');
        Route::post('password/update','updatePassword')->name('password_update');
    });

});
Route::controller(HomeSliderController::class)->middleware(['auth'])->group(function(){
    Route::prefix('admin/slider/')->group(function(){
        Route::get('view','viewSlider')->name('view_slider');
        Route::post('update','updateSlider')->name('update_slider');
    });

});
Route::controller(AboutController::class)->middleware('auth')->group(function(){
    Route::prefix('about')->group(function (){
        Route::get('view','viewAbout')->name('view_about');
        Route::post('update','updateAbout')->name('update_about');
        Route::get('front','frontAbout')->name('front_about')->withoutMiddleware('auth');
//        Route::get('front/multi_image','frontMultiImage')->name('front_multi_image');
        Route::get('multi_image','aboutMultiImage')->name('about_multi_image');
        Route::post('save_multi_image','saveMultiImage')->name('save_multi_image');
        Route::get('all/multi_image','allMultiImage')->name('all_multi_image');
        Route::get('edit/multi_image/{id}','editMultiImage')->name('edit_multi_image');
        Route::post('update/multi_image/{id}','updateMultiImage')->name('update_multi_image');
        Route::get('delete/multi_image/{id}','deleteMultiImage')->name('delete_multi_image');
    });
});
Route::controller(PortfolioController::class)->middleware('auth')->group(function(){
    Route::prefix('portfolio')->group(function(){
        Route::get('all','allPortfolio')->name('all_portfolio');
        Route::get('add','addPortfolio')->name('add_portfolio');
        Route::post('save','savePortfolio')->name('save_portfolio');
        Route::get('edit/{id}','editPortfolio')->name('edit_portfolio');
        Route::post('update/{id}','updatePortfolio')->name('update_portfolio');
        Route::get('delete/{id}','deletePortfolio')->name('delete_portfolio');
        Route::get('front/details/{id}','portfolioDetails')->name('portfolio_details')->withoutMiddleware('auth');
    });
});

