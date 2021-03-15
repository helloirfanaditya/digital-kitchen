<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController as HomeControllerCustomer;
use App\Http\Controllers\User\{AuthController, HomeController, MenuController, StoreController};
use Illuminate\Support\Facades\Route;


Route::get('/merchant/login', [AuthController::class, 'login'])->name('merchant.login');
Route::post('/merchant/login', [AuthController::class, 'Dologin'])->name('merchant.post.login');

Route::get('/', [HomeControllerCustomer::class, 'index'])->name('home.index');
Route::get('/item/{menu_id}', [HomeControllerCustomer::class, 'detail'])->name('home.detail');
Route::post('/item/add-to-cart/{menu_id}', [CartController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('/keranjang', [CartController::class, 'cartView'])->name('cart-view');
Route::get('checkout', [CheckoutController::class, 'checkoutView'])->name('checkout-view');

Route::group(['prefix' => 'merchant', 'middleware' => 'User'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('merchant.index');
    Route::get('/store', [StoreController::class, 'create'])->name('merchant.store.create');
    Route::post('/store', [StoreController::class, 'store'])->name('merchant.store.post.create');
    Route::get('/menu', [MenuController::class, 'index'])->name('merchant.menu');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('merchant.menu.create');
    Route::post('/menu/create', [MenuController::class, 'store'])->name('merchant.menu.post.create');
});
Route::get('/flush', function () {
    \Cart::clear();
});
