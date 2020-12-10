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

Route::get('/productos',                   [ProductosController::class, 'index'])->name('productos');
Route::get('/productos/agregar',           [ProductosController::class, 'create'])->name('productos.create');
Route::get('/productos/{producto}',        [ProductosController::class, 'show'])->name('productos.show');
Route::get('/productos/{producto}/editar', [ProductosController::class, 'update'])->name('productos.update');

Route::get('/insumos',                 [InsumosController::class, 'index'])->name('insumos');
Route::get('/insumos/agregar',         [InsumosController::class, 'create'])->name('insumos.create');
Route::get('/insumos/{insumo}',        [InsumosController::class, 'show'])->name('insumos.show');
Route::get('/insumos/{insumo}/editar', [InsumosController::class, 'update'])->name('insumos.update');

Route::get('/ventas',                [VentasController::class, 'index'])->name('ventas');
Route::get('/ventas/agregar',        [VentasController::class, 'create'])->name('ventas.create');
Route::get('/ventas/{venta}',        [VentasController::class, 'show'])->name('ventas.show');
Route::get('/ventas/{venta}/editar', [VentasController::class, 'update'])->name('ventas.update');

Route::get('/proveedores',                    [ProveedoresController::class, 'index'])->name('proveedores');
Route::get('/proveedores/agregar',            [ProveedoresController::class, 'create'])->name('proveedores.create');
Route::get('/proveedores/{proveedor}',        [ProveedoresController::class, 'show'])->name('proveedores.show');
Route::get('/proveedores/{proveedor}/editar', [ProveedoresController::class, 'update'])->name('proveedores.update');

Route::get('/usuarios',                  [UsuariosController::class, 'index'])->name('usuarios');
Route::get('/usuarios/agregar',          [UsuariosController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/{usuario}',        [UsuariosController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{usuario}/editar', [UsuariosController::class, 'update'])->name('usuarios.update');
