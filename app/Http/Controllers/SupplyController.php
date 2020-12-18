<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsumosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('insumos.index');
    }

    public function show(Insumo $insumo)
    {
        return view('insumos.show', compact('insumo'));
    }

    public function create()
    {
        return view('insumos.create');
    }

    public function edit(Insumo $insumo)
    {
        return view('insumos.edit', compact('insumo'));
    }

    public function update(Insumo $insumo)
    {
        $data = request()->validate(Insumo::reglas());
        $insumo->update($data);
        return redirect('/insumos');
    }

    public function store()
    {
        $data = request()->validate(Insumo::reglas());
        DB::table('insumos')->insert($data);
        return redirect('/insumos');
    }

    public function destroy(Insumo $insumo)
    {
        $insumo->delete();
        return redirect('/insumos');
    }
}
