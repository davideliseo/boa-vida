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
        return $user->hasArea('users');
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
        return $user->hasArea('users');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasArea('users');
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
        // - Nadie puede editar al administrador, excepto él mismo.
        // - Un encargado no puede editar a otro encargado de su
        //   misma área, a no ser que el editor sea además administrador.
        return $user->hasArea('users')
            && (!$model->admin || $user->admin)
            && (User::areNotPeers('users', $user, $model) || $user->admin);
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
        // - El usuario no puede eliminarse a sí mismo.
        // - Nadie puede eliminar encargados de usuario, excepto el administrador.
        // - Un encargado de usuario no puede eliminar a otro encargado de su
        //   misma área, a no ser que el que ejecuta la acción sea además administrador.
        return $user->hasArea('users')
            && ($user->id != $model->id)
            && !$model->admin
            && (User::areNotPeers('users', $user, $model) || $user->admin);
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
        return $user->hasArea('users');
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
        return $user->hasArea('users');
    }
}
