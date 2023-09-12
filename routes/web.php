<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OnePageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [OnePageController::class,'index'])->name('welcome');
Route::get('/get-peroduct', [OnePageController::class,'getProducts'])->name('get_products');
Route::post('/email', [OnePageController::class,'email'])->name('email.send');


Route::post('/logout',function(){
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('login');



Route::group(["middleware" => "auth"],function(){
    Route::resource('products',ProductController::class);
});
