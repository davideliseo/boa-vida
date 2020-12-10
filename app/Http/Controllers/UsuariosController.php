<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function __construct()
    {
        // FIXME: reactivar middleware.
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('usuarios.index');
    }

    public function show($usuario)
    {
        dd($usuario);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function update()
    {
        return view('usuarios.update');
    }

    public function store()
    {
        return redirect('/usuarios');
    }
}
