<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->anyRole('admin', 'users');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        return $user->anyRole('admin', 'users');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // Solo los administradores y encargados de usuarios pueden crear
        // nuevos usuarios.
        return $user->anyRole('admin', 'users');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        // TODO: (david) confirmar si cualquier administrador o encargado de
        // usuarios puede editar los atributos de los usuarios.
        return $user->anyRole('admin', 'users');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        // Criterios:
        // - El usuario debe ser administrador o ser encargado de usuarios.
        // - El usuario no puede eliminarse a sí mismo.
        // - Nadie puede eliminar administradores, excepto el propietario.
        // - Un encargado de usuario no puede eliminar a otro encargado de su
        //   misma área.
        return ($user->anyRole('admin', 'users')
            && ($user->id != $model->id)
            && User::areNotPeers('users', $user, $model))
            || ($model->hasRole('admin') && $user->hasRole('owner'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
         return $user->anyRole('admin', 'users');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        return $user->anyRole('admin', 'users');
    }
}
