<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Admin_UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\CatalogueMetadataAwareInterface;

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
// Route::get('/', [HomeController::class], 'index')->name('index');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'post_login']);
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'post_register']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/detail_product/{alias}', [HomeController::class, 'detail_product'])->name('detail_product');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/addCart/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/deleteCart/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/deleteListCart/{id}', [CartController::class, 'deleteListCart'])->name('cart.deleteList');
// Route::get('/updateCart/{id}/{qty}', [CartCo ntroller::class, 'updateListCart'])->name('cart.update');
Route::get('/updateListCart/{id}/{qty}', [CartController::class, 'updateListCart'])->name('cart.updateList');
Route::get('/deleteAllListCart', [CartController::class, 'deleteAllListCart'])->name('cart.deleteAllListCart');
Route::post('/updateAllListCart', [CartController::class, 'updateAllListCart'])->name('cart.updateAllList');


Route::prefix('category')->name('category.')->group(function () {
    Route::get('', [HomeController::class, 'category'])->name('index');
});



// Route::get('/detail_product')


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [Admin_UserController::class, 'login'])->name('login');
    Route::get('/register', [Admin_UserController::class, 'register'])->name('register');
    Route::post('/register', [Admin_UserController::class, 'post_register']);
    Route::post('login', [Admin_UserController::class, 'checkLogin']);
});


Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('index');
    Route::resource('category', CategoryController::class)->except(['show']);
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        Route::post('delete/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');
        Route::get('trash', [CategoryController::class, 'trash'])->name('trash');
        Route::get('restore/{id}', [CategoryController::class, 'restore'])->name('restore');
        Route::get('force_delete/{id}', [CategoryController::class, 'force_delete'])->name('force_delete');
    });
    Route::resource('product', ProductController::class)->except(['show']);
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('trash', [ProductController::class, 'trash'])->name('trash');
        Route::get('restore/{id}', [ProductController::class, 'restore'])->name('restore');
        Route::get('force_delete/{id}', [ProductController::class, 'force_delete'])->name('force_delete');
    });
});

// Route::get('/admin', function () {
//     return view('layouts.backend.index');
// });

// Route::get('/', function () {
//     return view('layouts.frontend.index');
// });
