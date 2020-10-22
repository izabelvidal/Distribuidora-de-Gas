<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Venda;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class VendaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return isset($user);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Venda $venda
     * @return mixed
     */
    public function view(User $user, Venda $venda)
    {
        return
            ($this->isCliente($user) and $this->isClienteDaVenda($user, $venda))
            or ($this->isGerente($user))
            or ($this->isFuncionario($user));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $this->isCliente($user);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Venda $venda
     * @return mixed
     */
    public function update(User $user, Venda $venda)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Venda $venda
     * @return mixed
     */
    public function delete(User $user, Venda $venda)
    {
        return
            ($this->isCliente($user) and $this->isClienteDaVenda($user, $venda))
            or ($this->isGerente($user));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Venda $venda
     * @return mixed
     */
    public function restore(User $user, Venda $venda)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Venda $venda
     * @return mixed
     */
    public function forceDelete(User $user, Venda $venda)
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
     * @return bool
     */
    public function isFuncionario(User $user): bool
    {
        return $user->tipo == 'funcionario';
    }

    /**
     * @param User $user
     * @param Venda $venda
     * @return bool
     */
    public function isClienteDaVenda(User $user, Venda $venda): bool
    {
        return $user->pessoa->cliente->id == $venda->cliente_id;
    }
}
