<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsumosController extends Controller
{
    public function __construct()
    {
        // FIXME: reactivar middleware.
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('insumos.index');
    }

    public function show($insumo)
    {
        dd($insumo);
    }

    public function create()
    {
        return view('insumos.create');
    }

    public function update()
    {
        return view('insumos.update');
    }

    public function store()
    {
        return redirect('/insumos');
    }
}
