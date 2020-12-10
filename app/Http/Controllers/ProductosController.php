<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function __construct()
    {
        // FIXME: reactivar middleware.
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('productos.index');
    }

    public function show($producto)
    {
        dd($producto);
    }

    public function create()
    {
        return view('productos.create');
    }

    public function update()
    {
        return view('productos.update');
    }

    public function store()
    {
        return redirect('/productos');
    }
}
