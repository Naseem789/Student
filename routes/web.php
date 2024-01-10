<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
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
    return view('index');
});

 
Route::get('/', [HomeController::class, 'index']);
Route::get('Home', [HomeController::class, 'index']);
Route::get('About', [HomeController::class, 'about']);
Route::get('Blog', [HomeController::class, 'blog']);
Route::get('Services', [HomeController::class, 'services']);
Route::get('Shop', [HomeController::class, 'shop']);
Route::get('Contact', [HomeController::class, 'contact']);
Route::get('Auth/login', [AuthController::class, 'login']);
Route::get('Auth/register', [AuthController::class, 'register']);
Route::get('Checkout', [CheckoutController::class, 'index']);
Route::get('Cart', [CartController::class, 'index']);
Route::get('Wish', [WishController::class, 'index']);


Route::get('admin', [AuthController::class, 'login']);
Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
Route::post('admin/product', [ProductController::class, 'index']);
Route::post('admin/add-product', [ProductController::class, 'insert_product']);
Route::post('admin/get-product', [ProductController::class, 'get_product']);
Route::post('admin/edit-product/{pid}', [ProductController::class, 'edit_product']);
Route::get('admin/register',[AuthController::class, 'register']);


