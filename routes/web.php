<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\Home\HomeSliderController;
use \App\Http\Controllers\Home\AboutController;
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

Route::controller(AdminController::class)->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('logout','adminLogout')->name('admin.logout');
        Route::get('profile','adminProfile')->name('admin_profile');
        Route::get('profile/edit/{id}','adminEditProfile')->name('edit_profile');
        Route::post('profile/update/{id?}','adminUpdateProfile')->name('update_profile');
        Route::get('password/change','passwordChange')->name('password_change');
        Route::post('password/update','updatePassword')->name('password_update');
    });

});
Route::controller(HomeSliderController::class)->group(function(){
    Route::prefix('admin/slider/')->group(function(){
        Route::get('view','viewSlider')->name('view_slider');
        Route::post('update','updateSlider')->name('update_slider');
    });

});
Route::controller(AboutController::class)->group(function (){
    Route::prefix('about')->group(function (){
        Route::get('view','viewAbout')->name('view_about');
        Route::post('update','updateAbout')->name('update_about');
        Route::get('front','frontAbout')->name('front_about');
    });
});
