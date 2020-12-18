<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.index');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate(User::rules());
        $user->update($data);
        return redirect('/usuarios');
    }

    // TODO: reemplazar con registro de usuario.
    public function store()
    {
        $data = request()->validate(User::rules());
        DB::table('users')->insert($data);
        return redirect('/usuarios');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/usuarios');
    }
}
