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

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::redirect('/', '/products');

    Route::get('home', function(){ return redirect('products'); })->name('home');

    Route::resources([
        'products'  => ProductController::class,
        'sales'     => SaleController::class,
        'supplies'  => SupplyController::class,
        'suppliers' => SupplierController::class,
        'users'     => UserController::class,
    ]);
});
