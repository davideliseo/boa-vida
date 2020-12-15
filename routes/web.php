<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsumosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VentasController;

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
Route::get    ('/insumos',                 [InsumosController::class, 'index'   ])->name('insumos.index');
Route::get    ('/insumos/agregar',         [InsumosController::class, 'create'  ])->name('insumos.create');
Route::post   ('/insumos',                 [InsumosController::class, 'store'   ])->name('insumos.store');
Route::get    ('/insumos/{insumo}',        [InsumosController::class, 'show'    ])->name('insumos.show');
Route::get    ('/insumos/{insumo}/editar', [InsumosController::class, 'edit'    ])->name('insumos.edit');
Route::patch  ('/insumos/{insumo}',        [InsumosController::class, 'update'  ])->name('insumos.update');
Route::delete ('/insumos/{insumo}',        [InsumosController::class, 'destroy' ])->name('insumos.destroy');

// Productos
Route::get    ('/productos',                   [ProductosController::class, 'index'   ])->name('productos.index');
Route::get    ('/productos/agregar',           [ProductosController::class, 'create'  ])->name('productos.create');
Route::post   ('/productos',                   [ProductosController::class, 'store'   ])->name('productos.store');
Route::get    ('/productos/{producto}',        [ProductosController::class, 'show'    ])->name('productos.show');
Route::get    ('/productos/{producto}/editar', [ProductosController::class, 'edit'    ])->name('productos.edit');
Route::patch  ('/productos/{producto}',        [ProductosController::class, 'update'  ])->name('productos.update');
Route::delete ('/productos/{producto}',        [ProductosController::class, 'destroy' ])->name('productos.destroy');

// Proveedores
Route::get    ('/proveedores',                    [ProveedoresController::class, 'index'   ])->name('proveedores.index');
Route::get    ('/proveedores/agregar',            [ProveedoresController::class, 'create'  ])->name('proveedores.create');
Route::post   ('/proveedores',                    [ProveedoresController::class, 'store'   ])->name('proveedores.store');
Route::get    ('/proveedores/{proveedor}',        [ProveedoresController::class, 'show'    ])->name('proveedores.show');
Route::get    ('/proveedores/{proveedor}/editar', [ProveedoresController::class, 'edit'    ])->name('proveedores.edit');
Route::patch  ('/proveedores/{proveedor}',        [ProveedoresController::class, 'update'  ])->name('proveedores.update');
Route::delete ('/proveedores/{proveedor}',        [ProveedoresController::class, 'destroy' ])->name('proveedores.destroy');

// Usuarios
Route::get    ('/usuarios',                  [UsuariosController::class, 'index'   ])->name('usuarios.index');
Route::get    ('/usuarios/agregar',          [UsuariosController::class, 'create'  ])->name('usuarios.create');
Route::post   ('/usuarios',                  [UsuariosController::class, 'store'   ])->name('usuarios.store');
Route::get    ('/usuarios/{usuario}',        [UsuariosController::class, 'show'    ])->name('usuarios.show');
Route::get    ('/usuarios/{usuario}/editar', [UsuariosController::class, 'edit'    ])->name('usuarios.edit');
Route::patch  ('/usuarios/{usuario}',        [UsuariosController::class, 'update'  ])->name('usuarios.update');
Route::delete ('/usuarios/{usuario}',        [UsuariosController::class, 'destroy' ])->name('usuarios.destroy');

// Ventas
Route::get    ('/ventas',                [VentasController::class, 'index'   ])->name('ventas.index');
Route::get    ('/ventas/agregar',        [VentasController::class, 'create'  ])->name('ventas.create');
Route::post   ('/ventas',                [VentasController::class, 'store'   ])->name('ventas.store');
Route::get    ('/ventas/{venta}',        [VentasController::class, 'show'    ])->name('ventas.show');
Route::get    ('/ventas/{venta}/editar', [VentasController::class, 'edit'    ])->name('ventas.edit');
Route::patch  ('/ventas/{venta}',        [VentasController::class, 'update'  ])->name('ventas.update');
Route::delete ('/ventas/{venta}',        [VentasController::class, 'destroy' ])->name('ventas.destroy');
