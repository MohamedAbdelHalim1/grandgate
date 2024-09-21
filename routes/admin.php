<?php

use App\Http\Controllers\Admin\AccessoryController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\SeoMetaController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return redirect('/admin/en/');
});
Route::get('/en/', function () {
    return redirect()->route('admin.dashboard');
});
Route::group(['middleware' => ['auth'],'prefix'=>'en'], function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::resource('projects', ProjectController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('accessories', AccessoryController::class);
    Route::resource('blog', BlogController::class);
    Route::post('blogs/update-selected/{id}', [BlogController::class, 'updateSelected'])->name('blog.updateSelected');
    Route::get('category/{id}/destroy',[CategoryController::class,'destroy'])->name('categories.destroy');
    Route::get('projects/{id}/destroy',[ProjectController::class,'destroy'])->name('projects.destroy');
    Route::get('accessories/{id}/destroy',[AccessoryController::class,'destroy'])->name('accessories.destroy');
    Route::get('contact-requests',[AdminController::class,'contactRequests'])->name('contact_requests');
    Route::get('remove_img/{id}',[AdminController::class,'remove_img'])->name('remove_img');
    Route::get('contact-requests/{id}/destroy',[AdminController::class,'destroyContactRequest'])->name('requests.destroy');

    // Route to list all SEO meta records (if needed)
Route::get('/seo-meta', [SeoMetaController::class, 'index'])->name('seo.index');

// Route to show the form for editing a specific SEO meta record
Route::get('/seo-meta/{id}/edit', [SeoMetaController::class, 'edit'])->name('seo.edit');

// Route to handle the update request for a specific SEO meta record
Route::put('/seo-meta/{id}', [SeoMetaController::class, 'update'])->name('seo.update');


});
Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.login');
Route::post('login',[LoginController::class,'login'])->name('admin.login.post');
