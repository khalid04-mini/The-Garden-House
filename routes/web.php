<?php

use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdresseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClientAdminController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\CategoryAdminController;
use App\Http\Controllers\ReturnCallBackController;

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

// menu route
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contactus');
Route::get('/about-us', function () {
    return view('about-us');
})->name('aboutus');

// cart route
Route::get('/cart', function () {
    return view('cart');
})->name('cart');


// login page
Route::get('/my-account', [SessionController::class, 'index'])->name('pagelogin');
Route::post('/my-account/login', [SessionController::class, 'store'])->name('storelogin');
// register form
Route::post('/my-account/register', [RegisterController::class, 'store'])->name('registerform');
// logout
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');


// client routes

Route::prefix('my-account')->middleware('auth')->group(function () {
    Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('dashboard');
    Route::get('/edit-account', [ClientController::class, 'accountdetails'])->name('editaccount');
    Route::post('/edit-account', [ClientController::class, 'updatedetails'])->name('updatedetails');
    Route::get('/edit-addresses', [ClientController::class, 'editaddresses'])->name('editaddresses');
    Route::get('/add-addresse', [AdresseController::class, 'create'])->name('adaddresse');
    Route::post('/add-addresse', [AdresseController::class, 'store'])->name('storeaddresse');
    Route::post('/delete-addresse/{adresse}', [AdresseController::class, 'destroy'])->name('deleteaddresse');
    Route::get('/edit-adresse/{adresse}', [AdresseController::class, 'edit'])->name('updateadresse');
    Route::post('/edit-adresse/{adresse}', [AdresseController::class, 'update'])->name('storeupdateadresse');

    Route::get('/checkout', [ClientController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [ClientController::class, 'check'])->name('check');
    Route::get('/orders', [ClientController::class, 'orders'])->name('orders');
    Route::get('/view-order/{order}', [ClientController::class, 'vieworder'])->name('vieworder');
});


//  products routes

Route::get('/product-type/flowers', [ProductController::class, 'showFlowers']);
Route::get('/product-type/plants', [ProductController::class, 'showPlants']);
Route::get('product/{product:slug}', [ProductController::class, 'show'])->name('showproductclient');

// admin routes

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductAdminController::class, 'index'])->name('products');
        Route::get('/create', [ProductAdminController::class, 'create'])->name('createproduct');
        Route::post('/create', [ProductAdminController::class, 'store'])->name('storeproduct');
        Route::delete('/delete/{product:slug}', [ProductAdminController::class, 'destroy'])->name('deleteproduct');
        Route::get('/edit/{product:slug}', [ProductAdminController::class, 'edit'])->name('editproduct');
        Route::patch('/edit/{product:slug}', [ProductAdminController::class, 'update'])->name('updateproduct');
        Route::get('/{product:slug}', [ProductAdminController::class, 'show'])->name('showproduct');
    });
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryAdminController::class, 'index'])->name('categories');
        Route::get('/create', [CategoryAdminController::class, 'create'])->name('createcategory');
        Route::post('/create', [CategoryAdminController::class, 'store'])->name('storecategory');
        Route::delete('/delete/{category:slug}', [CategoryAdminController::class, 'destroy'])->name('deletecategory');
        Route::get('/edit/{category:slug}', [CategoryAdminController::class, 'edit'])->name('editcategory');
        Route::patch('/edit/{category:slug}', [CategoryAdminController::class, 'update'])->name('updatecategory');
        Route::get('/{category:slug}', [CategoryAdminController::class, 'show'])->name('showcategory');
    });

    Route::prefix('orders')->group(function () {
        Route::get('/', [AdminController::class, 'orders'])->name('adminorders');
        Route::get('/order/detail/{order}', [AdminController::class, 'order_detail'])->name('order_detail');
        Route::patch('/order/detail/{order}', [AdminController::class, 'update'])->name('updateorderdetail');
        Route::delete('/order/detail/delete/{order}', [AdminController::class, 'destroyorder'])->name('destroyorder');
    });

    Route::prefix('clients')->group(function () {
        Route::get('/', [ClientAdminController::class, 'index'])->name('adminclients');
        Route::get('/client/{user}', [ClientAdminController::class, 'show'])->name('adminclient');
        Route::patch('/client/{user}', [ClientAdminController::class, 'switch'])->name('switchads');
    });
});



// Route::get('/mail', function () { 
    
//     return new OrderMail();

// });
