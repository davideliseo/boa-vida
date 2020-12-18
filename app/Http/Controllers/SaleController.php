<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function show(Venta $venta)
    {
        return view('ventas.show', compact('venta'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function edit(Venta $venta)
    {
        return view('ventas.edit', compact('venta'));
    }

    public function update(Venta $venta)
    {
        $data = request()->validate(Venta::reglas());
        $venta->update($data);
        return redirect('/ventas');
    }

    public function store()
    {
        $data = request()->validate(Venta::reglas());
        DB::table('ventas')->insert($data);
        return redirect('/ventas');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect('/ventas');
    }
}
