<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('proveedores.index');
    }

    public function show(Proveedor $proveedor)
    {
        return view('proveedores.show', compact('proveedor'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function edit(Proveedor $proveedor)
    {
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Proveedor $proveedor)
    {
        $data = request()->validate(Proveedor::reglas());
        $proveedor->update($data);
        return redirect('/proveedores');
    }

    public function store()
    {
        $data = request()->validate(Proveedor::reglas());
        DB::table('proveedores')->insert($data);
        return redirect('/proveedores');
    }

    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect('/proveedores');
    }
}
