<?php

namespace App\Policies;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user = null)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produto  $produto
     * @return mixed
     */
    public function view(Produto $produto, User $user = null)
    {
        return true;
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
     * @param  \App\Models\Produto  $produto
     * @return mixed
     */
    public function update(User $user, Produto $produto)
    {
        return $this->isGerente($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produto  $produto
     * @return mixed
     */
    public function delete(User $user, Produto $produto)
    {
        return $this->isGerente($user);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produto  $produto
     * @return mixed
     */
    public function restore(User $user, Produto $produto)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produto  $produto
     * @return mixed
     */
    public function forceDelete(User $user, Produto $produto)
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
}
