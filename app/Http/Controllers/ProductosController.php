<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('productos.index');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Producto $producto)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'precio' => ['required', 'numeric'],
            'cantidad' => 'integer',
            'fecha_elaboracion' => ['date', 'nullable']
        ]);

        dd($data);

        $producto->update($data);
        return redirect('/productos');
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required',
            'precio' => 'numeric',
            'fecha_elaboracion' => ['date', 'nullable'],
            'cantidad' => 'integer'
        ]);

        DB::table('productos')->insert($data);

        return redirect('/productos');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('/productos');
    }
}
