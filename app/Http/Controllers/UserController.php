<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = User::latest('id')->get();
        return view('users.index', compact('collection'));
    }

    /**
     * TODO: (david) reemplazar con registro de usuario.
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        // Extracción de los datos
        $data = $request->validated();
        $dataExceptAreas = array_diff_key($data, ['areas' => null]);

        // Creación y obtención del usuario creado
        User::create($dataExceptAreas + ['password' => Hash::make('12341234')]);
        $user = User::latest('id')->first();

        // Asignación de áreas
        $areas = json_decode($data['areas'], true);
        $user->areas()->sync($areas);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // Extracción de los datos
        $data = $request->validated();
        $dataExceptAreas = array_diff_key($data, ['areas' => null]);

        // Actualización del usuario
        $user->update($dataExceptAreas);

        // Asignación de áreas
        $areas = json_decode($data['areas'], true);
        $user->areas()->sync($areas);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
