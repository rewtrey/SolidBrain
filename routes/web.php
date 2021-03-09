<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogSearchController;
use App\Http\Controllers\ContactFormController;

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


//home
Route::get('/', function () {
 return view('layouts.app');
});

//search blogs
Route::get('/search/result', [BlogSearchController::class, 'index']);
Route::get('/autocomplete', [BlogSearchController::class, 'search'])->name('autocomplete');



Auth::routes();

// contact form
Route::get('/contact-us', [ContactFormController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactFormController::class, 'send_mail'])->name('addContact');

//memu
Route::get('/{slug}', [PageController::class, 'category'])->name('category');
Route::get('/article/{slug}', [PageController::class, 'article'])->name('article');
Route::get('/blog/{slug}', [PageController::class, 'blog'])->name('blog');


//ADMIN ROUTE
Route::prefix('admin' )->middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('admin.index');
    Route::resource('category', CategoryController::class, ['as' => 'admin']);
    Route::resource('article', ArticleController::class, ['as' => 'admin']);
    Route::resource('blogs', BlogController::class, ['as' => 'admin']);
    Route::post('ckeditor/image_upload', [App\Http\Controllers\CKEditorController::class, 'upload'])->name('upload');
});





