<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\CKEditorController;
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
    return view('layouts.app');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Route::prefix('admin' )->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.index');
    Route::resource('category', CategoryController::class, ['as' => 'admin']);
    Route::resource('article', ArticleController::class, ['as' => 'admin']);
    Route::post('ckeditor/image_upload', [App\Http\Controllers\CKEditorController::class, 'upload'])->name('upload');
});





