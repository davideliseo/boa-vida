<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function __construct()
    {
        // FIXME: reactivar middleware.
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('proveedores.index');
    }

    public function show($proveedor)
    {
        dd($proveedor);
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function update()
    {
        return view('proveedores.update');
    }

    public function store()
    {
        return redirect('/proveedores');
    }
}
