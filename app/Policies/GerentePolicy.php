<?php

namespace App\Policies;

use App\Models\Gerente;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GerentePolicy
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
        return $this->isGerente($user);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gerente  $gerente
     * @return mixed
     */
    public function view(User $user, Gerente $gerente)
    {
        return $this->isGerente($user);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $this->isGerente($user);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gerente  $gerente
     * @return mixed
     */
    public function update(User $user, Gerente $gerente)
    {
        return $this->isGerente($user) and $this->isOGerente($user, $gerente);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gerente  $gerente
     * @return mixed
     */
    public function delete(User $user, Gerente $gerente)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gerente  $gerente
     * @return mixed
     */
    public function restore(User $user, Gerente $gerente)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gerente  $gerente
     * @return mixed
     */
    public function forceDelete(User $user, Gerente $gerente)
    {
        return false;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function isGerente(User $user): bool
    {
        return $user->tipo == 'gerente';
    }

    /**
     * @param User $user
     * @param Gerente $gerente
     * @return bool
     */
    public function isOGerente(User $user, Gerente $gerente): bool
    {
        return $user->pessoa->gerente->id == $gerente->id;
    }
}
