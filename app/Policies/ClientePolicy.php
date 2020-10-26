<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientePolicy
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
     * @param  \App\Models\Cliente  $cliente
     * @return mixed
     */
    public function view(User $user, Cliente $cliente)
    {
        return ($this->isCliente($user) and $this->isOCliente($user, $cliente)) or ($this->isGerente($user));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user = null)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cliente  $cliente
     * @return mixed
     */
    public function update(User $user, Cliente $cliente)
    {
        return ($this->isCliente($user) and $this->isOCliente($user, $cliente)) or $this->isGerente($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cliente  $cliente
     * @return mixed
     */
    public function delete(User $user, Cliente $cliente)
    {
        return ($this->isCliente($user) and $this->isOCliente($user, $cliente)) or ($this->isGerente($user));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cliente  $cliente
     * @return mixed
     */
    public function restore(User $user, Cliente $cliente)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cliente  $cliente
     * @return mixed
     */
    public function forceDelete(User $user, Cliente $cliente)
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
     * @return bool
     */
    public function isCliente(User $user): bool
    {
        return $user->tipo == 'cliente';
    }

    /**
     * @param User $user
     * @param Cliente $cliente
     * @return bool
     */
    public function isOCliente(User $user, Cliente $cliente): bool
    {
        return $user->pessoa->cliente->id == $cliente->id;
    }
}
