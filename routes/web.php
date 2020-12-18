<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SaleController;

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

Route::get('/inicio', [HomeController::class, 'index'])->name('home');

Route::redirect('/', '/inicio');

// Insumos
Route::get    ('/insumos',                 [SupplyController::class, 'index'   ])->name('supplies.index');
Route::get    ('/insumos/agregar',         [SupplyController::class, 'create'  ])->name('supplies.create');
Route::post   ('/insumos',                 [SupplyController::class, 'store'   ])->name('supplies.store');
Route::get    ('/insumos/{supply}',        [SupplyController::class, 'show'    ])->name('supplies.show');
Route::get    ('/insumos/{supply}/editar', [SupplyController::class, 'edit'    ])->name('supplies.edit');
Route::patch  ('/insumos/{supply}',        [SupplyController::class, 'update'  ])->name('supplies.update');
Route::delete ('/insumos/{supply}',        [SupplyController::class, 'destroy' ])->name('supplies.destroy');

// Productos
Route::get    ('/productos',                  [ProductController::class, 'index'   ])->name('products.index');
Route::get    ('/productos/agregar',          [ProductController::class, 'create'  ])->name('products.create');
Route::post   ('/productos',                  [ProductController::class, 'store'   ])->name('products.store');
Route::get    ('/productos/{product}',        [ProductController::class, 'show'    ])->name('products.show');
Route::get    ('/productos/{product}/editar', [ProductController::class, 'edit'    ])->name('products.edit');
Route::patch  ('/productos/{product}',        [ProductController::class, 'update'  ])->name('products.update');
Route::delete ('/productos/{product}',        [ProductController::class, 'destroy' ])->name('products.destroy');

// Proveedores
Route::get    ('/proveedores',                   [SupplierController::class, 'index'   ])->name('suppliers.index');
Route::get    ('/proveedores/agregar',           [SupplierController::class, 'create'  ])->name('suppliers.create');
Route::post   ('/proveedores',                   [SupplierController::class, 'store'   ])->name('suppliers.store');
Route::get    ('/proveedores/{supplier}',        [SupplierController::class, 'show'    ])->name('suppliers.show');
Route::get    ('/proveedores/{supplier}/editar', [SupplierController::class, 'edit'    ])->name('suppliers.edit');
Route::patch  ('/proveedores/{supplier}',        [SupplierController::class, 'update'  ])->name('suppliers.update');
Route::delete ('/proveedores/{supplier}',        [SupplierController::class, 'destroy' ])->name('suppliers.destroy');

// Usuarios
Route::get    ('/usuarios',               [UsersController::class, 'index'   ])->name('users.index');
Route::get    ('/usuarios/agregar',       [UsersController::class, 'create'  ])->name('users.create');
Route::post   ('/usuarios',               [UsersController::class, 'store'   ])->name('users.store');
Route::get    ('/usuarios/{user}',        [UsersController::class, 'show'    ])->name('users.show');
Route::get    ('/usuarios/{user}/editar', [UsersController::class, 'edit'    ])->name('users.edit');
Route::patch  ('/usuarios/{user}',        [UsersController::class, 'update'  ])->name('users.update');
Route::delete ('/usuarios/{user}',        [UsersController::class, 'destroy' ])->name('users.destroy');

// Ventas
Route::get    ('/ventas',               [SaleController::class, 'index'   ])->name('sales.index');
Route::get    ('/ventas/agregar',       [SaleController::class, 'create'  ])->name('sales.create');
Route::post   ('/ventas',               [SaleController::class, 'store'   ])->name('sales.store');
Route::get    ('/ventas/{sale}',        [SaleController::class, 'show'    ])->name('sales.show');
Route::get    ('/ventas/{sale}/editar', [SaleController::class, 'edit'    ])->name('sales.edit');
Route::patch  ('/ventas/{sale}',        [SaleController::class, 'update'  ])->name('sales.update');
Route::delete ('/ventas/{sale}',        [SaleController::class, 'destroy' ])->name('sales.destroy');
