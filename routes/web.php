<?php

use Illuminate\Support\Facades\{Auth, Route};
use App\Http\Controllers\{
    HomeController,
    SupplyController,
    ProductController,
    SupplierController,
    UserController,
    SaleController,
};

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

Auth::routes();

Route::redirect('/', '/inicio');

Route::middleware('auth')->group(function () {
    Route::get('/inicio', [HomeController::class, 'index'])->name('home');

    Route::resource('insumos', SupplyController::class)
        ->names('supplies')
        ->parameter('insumos', 'supply');

    Route::resource('productos', ProductController::class)
        ->names('products')
        ->parameter('productos', 'product');

    Route::resource('proveedores', SupplierController::class)
        ->names('suppliers')
        ->parameter('proveedores', 'supplier');

    Route::resource('ventas', SaleController::class)
        ->names('sales')
        ->parameter('ventas', 'sale');

    Route::resource('usuarios', UserController::class)
        ->names('users')
        ->parameter('usuarios', 'user');
});
