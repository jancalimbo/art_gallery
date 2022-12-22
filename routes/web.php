<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\EquipmentsController;

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

//Auth routes
Route::get('/',[AuthController::class, 'loginForm'])->name('login'); 
Route::post('/',[AuthController::class, 'login']); 
Route::get('/register',[AuthController::class, 'registerForm']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);


Route::group(['middleware'=> ['auth', 'verified']],function(){
    
    Route::prefix('arts')->group(function(){
        Route::controller(ArtController::class)->group(function (){
            Route::get('/catalogue', 'index')->name('curator-view')->middleware('role:curator');
            Route::get('/', 'gallery')->name('galleria');
            Route::get('/add', 'create')->name('add-art')->middleware('role:curator');
            // Route::get('/update/{equipment}', 'update')->name('update-item')->middleware('role:curator');
            // Route::get('/delete/{equipment}', 'delete')->name('delete-item')->middleware('role:curator');
            // Route::get('/like/{equipment}', 'like')->name('like');
            // Route::get('/add-to-cart/{equipment}', 'addToCart')->name('add-to-cart')->middleware('role:viewer');
        });
    });
    Route::controller(SiteController::class)->group(function (){
        Route::get('/lobby', 'lobby')->name('lobby')->middleware('role:viewer');
        Route::get('/art/{art}', 'viewArtDetails')->middleware('role:viewer');
        Route::get('/order/{art}', 'orderArt')->middleware('role:viewer');
        // Route::get('/cart', 'cart')->name('cart')->middleware('role:viewer');
        // Route::get('/checkout', 'checkout')->name('checkout')->middleware('role:viewer');
    });

    
});










