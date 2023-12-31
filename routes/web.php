<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Admin_UserController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckOutController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserController;
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
Route::get('/addCartWithQuantity/{id}/{qty}', [CartController::class, 'addCartWithQuantity'])->name('cart.addcart');
Route::get('/deleteCart/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/deleteListCart/{id}', [CartController::class, 'deleteListCart'])->name('cart.deleteList');
Route::get('/updateListCart/{id}/{qty}', [CartController::class, 'updateListCart'])->name('cart.updateList');
Route::get('/deleteAllListCart', [CartController::class, 'deleteAllListCart'])->name('cart.deleteAllListCart');
Route::post('/updateAllListCart', [CartController::class, 'updateAllListCart'])->name('cart.updateAllList');
Route::post('/notloginin', [CheckOutController::class, 'notloginin'])->middleware('user')->name('cart.checkout.notloginin');
Route::post('/loginin', [CheckOutController::class, 'loginin'])->name('cart.checkout.loginin');
Route::post('/order/{id}', [CheckOutController::class, 'order'])->name('cart.checkout.order');
Route::get('/order_complete/{id}', [CheckOutController::class, 'order_complete'])->name('cart.checkout.order_complete');





Route::prefix('category')->name('category.')->group(function () {
    Route::get('', [HomeController::class, 'category'])->name('index');
    Route::prefix('ao-nu')->name('ao-nu.')->group(function () {  
        // Route::get('', [HomeController::class, 'category'])->name('index');
        Route::get('/ao-polo', [HomeController::class, 'ao_polo'])->name('ao-polo');
        Route::get('/ao-ni', [HomeController::class, 'ao_ni'])->name('ao-ni');
        Route::get('/ao-len', [HomeController::class, 'ao_len'])->name('ao-len');
    });
    Route::prefix('quan-nu')->name('quan-nu.')->group(function () {  
        // Route::get('', [HomeController::class, 'category'])->name('index');
        Route::get('/quan-au', [HomeController::class, 'quan_au'])->name('quan-au');
        Route::get('/quan-short', [HomeController::class, 'quan_short'])->name('quan-short');
        Route::get('/quan-kaki', [HomeController::class, 'quan_kaki'])->name('quan-kaki');
    });
    Route::prefix('ao-nam')->name('ao-nam.')->group(function () {  
        // Route::get('', [HomeController::class, 'category'])->name('index');
        Route::get('/ao-polo-nam', [HomeController::class, 'ao_polo_nam'])->name('ao-polo-nam');
        Route::get('/ao-khoac-nam', [HomeController::class, 'ao_khoac_nam'])->name('ao-khoac-nam');
        Route::get('/ao-ni-nam', [HomeController::class, 'ao_ni_nam'])->name('ao-ni-nam');
    });
    Route::prefix('quan-nam')->name('quan-nam.')->group(function () {  
        // Route::get('', [HomeController::class, 'category'])->name('index');
        Route::get('/quan-au-nam', [HomeController::class, 'quan_au_nam'])->name('quan-au-nam');
        Route::get('/quan-kaki-nam', [HomeController::class, 'quan_kaki_nam'])->name('quan-kaki-nam');
        Route::get('/quan-jeans-nam', [HomeController::class, 'quan_jeans_nam'])->name('quan-jeans-nam');
    });
});



// Route::get('/detail_product')


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [Admin_UserController::class, 'login'])->name('login');
    Route::get('/register', [Admin_UserController::class, 'register'])->name('register');
    Route::post('/register', [Admin_UserController::class, 'post_register']);
    Route::post('login', [Admin_UserController::class, 'checkLogin']);
    Route::post('logout', [Admin_UserController::class, 'logout'])->name('logout');
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
    Route::resource('menu', MenuController::class)->except(['show']);
    Route::prefix('menu')->name('menu.')->group(function () {
        Route::get('trash', [MenuController::class, 'trash'])->name('trash');
        Route::get('restore/{id}', [MenuController::class, 'restore'])->name('restore');
        Route::get('force_delete/{id}', [MenuController::class, 'force_delete'])->name('force_delete');
    });
    Route::resource('user', UsersController::class)->except(['show']);
    Route::resource('adminUser', Admin_UserController::class)->except(['show']);
    Route::get('trash', [Admin_UserController::class, 'trash'])->name('trash');
        Route::get('restore/{id}', [Admin_UserController::class, 'restore'])->name('restore');
        Route::get('force_delete/{id}', [Admin_UserController::class, 'force_delete'])->name('force_delete');
});

// Route::get('/admin', function () {
//     return view('layouts.backend.index');
// });

// Route::get('/', function () {
//     return view('layouts.frontend.index');
// });
