<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ventas.index');
    }

    public function show($venta)
    {
        dd($venta);
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function update()
    {
        return view('ventas.update');
    }

    public function store()
    {
        return redirect('/ventas');
    }
}
