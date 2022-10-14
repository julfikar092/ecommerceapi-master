<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::resource('category','App\Http\Controllers\CategoryController');
//done
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/{category}', [CategoryController::class, 'show']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
Route::post('/category/{category}/update', [CategoryController::class, 'update']);
Route::post('/category/{category}/destroy', [CategoryController::class, 'destroy']);


//Route::resource('city','App\Http\Controllers\CityController');
//done
Route::get('/cities', [CityController::class, 'index']);
Route::get('/city/{city}', [CityController::class, 'show']);
Route::post('/city/store', [CityController::class, 'store']);
Route::post('/city/{city}/update', [CityController::class, 'update']);
Route::post('/city/{city}/destroy', [CityController::class, 'destroy']);


//Route::resource('cart','App\Http\Controllers\CartController');
//done
Route::get('/carts', [CartController::class, 'index']);
Route::get('/cart/{cart}', [CartController::class, 'show']);
Route::post('/cart/store', [CartController::class, 'store']);
Route::post('/cart/{cart}/update', [CartController::class, 'update']);
Route::post('/cart/{cart}/destroy', [CartController::class, 'destroy']);

//Route::resource('brand','App\Http\Controllers\BrandController');
//done
Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brand/{brand}', [BrandController::class, 'show']);
Route::post('/brand/store', [BrandController::class, 'store']);
Route::post('/brand/{brand}/update', [BrandController::class, 'update']);
Route::post('/brand/{brand}/destroy', [BrandController::class, 'destroy']);


Route::resource('blog','App\Http\Controllers\BlogController');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
