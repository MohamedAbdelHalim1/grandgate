<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', function () {
    return redirect()->route('index',Session::get('lang','en'));
});
Route::get('/{lang}/', [HomeController::class,'index'])->name('index');
Route::get('/lang/{lang}', [HomeController::class,'change_lang'])->name('change-lang');
Route::get('/{lang}/about-us', [HomeController::class,'about'])->name('about-us');
Route::get('/{lang}/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/{lang}/blog/details/{id}', [HomeController::class,'blog_details'])->name('blog_details');
Route::get('/{lang}/accessories', [HomeController::class,'accessories'])->name('accessories');
Route::get('/{lang}/accessories/{slug}', [HomeController::class,'accessory'])->name('accessories_details');
Route::get('/{lang}/products', [HomeController::class,'categories'])->name('products');
Route::get('/{lang}/projects', [HomeController::class,'projects'])->name('projects');
Route::get('/{lang}/projects/{slug}', [HomeController::class,'project'])->name('project_details');
Route::get('/{lang}/products/{slug}', [HomeController::class,'category'])->name('product_details');
Route::get('/{lang}/contact-us', [HomeController::class,'contact'])->name('contact-us');
Route::post('/contact', [HomeController::class,'contact_post'])->name('contact_post');
Route::get('/sitemap.xml', [SitemapController::class, 'generateSitemap']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
