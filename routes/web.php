<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\SliderInfoController;
use App\Http\Controllers\HolidayController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route pour changer la locale
Route::get('/locale/{locale}', function ($locale) {
    $supported = ['fr', 'en', 'es', 'de', 'zh'];
    if (in_array($locale, $supported)) {
        session(['locale' => $locale]);
    }
    $referer = request()->headers->get('referer');
    return $referer ? redirect($referer) : redirect()->route('welcome');
})->name('set-locale')->where('locale', 'fr|en|es|de|zh');

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');

Route::get('/realisation', [RealisationController::class, 'index'])->name('realisation');
Route::get('/realisation-detail', [RealisationController::class, 'show'])->name('realisation.detail');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServicesController::class, 'show'])->name('services.show');

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Contact Info Management
    Route::get('/admin/contact-info', [ContactInfoController::class, 'edit'])->name('contact-info.edit');
    Route::patch('/admin/contact-info', [ContactInfoController::class, 'update'])->name('contact-info.update');

    // Slider Info Management
    Route::resource('/admin/slider-info', SliderInfoController::class, [
        'names' => [
            'index' => 'slider-info.index',
            'create' => 'slider-info.create',
            'store' => 'slider-info.store',
            'edit' => 'slider-info.edit',
            'update' => 'slider-info.update',
            'destroy' => 'slider-info.destroy',
        ],
        'parameters' => ['slider-info' => 'sliderInfo']
    ]);

    // Holiday Management
    Route::resource('/admin/holidays', HolidayController::class, [
        'names' => [
            'index' => 'holidays.index',
            'create' => 'holidays.create',
            'store' => 'holidays.store',
            'show' => 'holidays.show',
            'edit' => 'holidays.edit',
            'update' => 'holidays.update',
            'destroy' => 'holidays.destroy',
        ],
    ]);

    // Blog Management
    Route::resource('/admin/blogs', BlogAdminController::class, [
        'names' => [
            'index' => 'blogs.index',
            'create' => 'blogs.create',
            'store' => 'blogs.store',
            'show' => 'blogs.show',
            'edit' => 'blogs.edit',
            'update' => 'blogs.update',
            'destroy' => 'blogs.destroy',
        ],
        'parameters' => ['blog' => 'blog']
    ]);
});

require __DIR__.'/auth.php';
