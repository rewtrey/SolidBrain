<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin' )->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.index');
    Route::resource('category', CategoryController::class, ['as' => 'admin']);
});


//Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function () {
   // Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.index');
   // Route::resource('category', CategoryController::class);
//});



//Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
   // Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.index');
   // Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
//});




