<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\Home\HomeSliderController;
use \App\Http\Controllers\Home\AboutController;
use \App\Http\Controllers\Home\PortfolioController;
use \App\Http\Controllers\Home\BlogCategoryController;
use \App\Http\Controllers\Home\BlogController;
use \App\Http\Controllers\Home\FooterController;
use \App\Http\Controllers\Home\ContactController;
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

Route::group(['middleware'=>'auth'],function(){
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
    Route::controller(AboutController::class)->group(function(){
        Route::prefix('about')->group(function (){
            Route::get('view','viewAbout')->name('view_about');
            Route::post('update','updateAbout')->name('update_about');
            Route::get('front','frontAbout')->name('front_about')->withoutMiddleware('auth');
            Route::get('multi_image','aboutMultiImage')->name('about_multi_image');
            Route::post('save_multi_image','saveMultiImage')->name('save_multi_image');
            Route::get('all/multi_image','allMultiImage')->name('all_multi_image');
            Route::get('edit/multi_image/{id}','editMultiImage')->name('edit_multi_image');
            Route::post('update/multi_image/{id}','updateMultiImage')->name('update_multi_image');
            Route::get('delete/multi_image/{id}','deleteMultiImage')->name('delete_multi_image');
        });
    });
    Route::controller(PortfolioController::class)->group(function(){
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
    Route::controller(BlogCategoryController::class)->group(function (){
        Route::prefix('blog-category')->group(function(){
            Route::get('all','allBlogCategory')->name('all_blog_category');
            Route::get('add','addBlogCategory')->name('add_blog_category');
            Route::post('save','saveBlogCategory')->name('save_blog_category');
            Route::get('edit/{id}','editBlogCategory')->name('edit_blog_category');
            Route::post('update/{id}','updateBlogCategory')->name('update_blog_category');
            Route::get('delete/{id}','deleteBlogCategory')->name('delete_blog_category');
        });
    });
    Route::resource('blog',BlogController::class);

    Route::controller(FooterController::class)->group(function(){
        Route::prefix('footer')->group(function(){
            Route::get('all','FooterSetup')->name('footer_all');
            Route::post('update','FooterUpdate')->name('footer_update');
        });
    });

    Route::controller(ContactController::class)->group(function(){
        Route::prefix('contact')->group(function(){
            Route::get('front','Contact')->name('contact_me')->withoutMiddleware('auth');
            Route::post('save','SaveContact')->name('save_contact')->withoutMiddleware('auth');
            Route::get('all/message','AllContactMessage')->name('all_contact_message');
            Route::get('delete/{id}','DeleteContactMessage')->name('delete_contact_message');
        });
    });

});


