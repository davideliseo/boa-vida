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
use App\Models\User;

if (User::where("admin", "=", "true")->exists()) {
    Auth::routes([
        'register' => false
    ]);
} else {
    Auth::routes();
}

Route::get('/users/{user}/new-password', [UserController::class, 'newPassword'])->name('users.new-password');

Route::middleware('auth')->group(function () {
    Route::redirect('/', '/products');

    Route::get('home', function () {
        return redirect('products');
    })->name('home');

    Route::resources([
        'products'  => ProductController::class,
        'sales'     => SaleController::class,
        'supplies'  => SupplyController::class,
        'suppliers' => SupplierController::class,
        'users'     => UserController::class,
    ]);
});
