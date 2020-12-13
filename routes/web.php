<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\InsumosController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\UsuariosController;

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

Route::get    ('/productos',                   [ProductosController::class, 'index'   ])->name('productos.index');
Route::get    ('/productos/agregar',           [ProductosController::class, 'create'  ])->name('productos.create');
Route::post   ('/productos',                   [ProductosController::class, 'store'   ])->name('productos.store');
Route::get    ('/productos/{producto}',        [ProductosController::class, 'show'    ])->name('productos.show');
Route::get    ('/productos/{producto}/editar', [ProductosController::class, 'edit'    ])->name('productos.edit');
Route::patch  ('/productos/{producto}',        [ProductosController::class, 'update'  ])->name('productos.update');
Route::delete ('/productos/{producto}',        [ProductosController::class, 'destroy' ])->name('productos.destroy');
