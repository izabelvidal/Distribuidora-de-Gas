<?php

namespace App\Policies;

use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FuncionarioPolicy
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
     * @param  \App\Models\Funcionario  $funcionario
     * @return mixed
     */
    public function view(User $user, Funcionario $funcionario)
    {
        return ($this->isGerente($user) or ($this->isFuncionario($user) and $this->isOFuncionario($user, $funcionario)));
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
     * @param  \App\Models\Funcionario  $funcionario
     * @return mixed
     */
    public function update(User $user, Funcionario $funcionario)
    {
        return $this->isFuncionario($user) and $this->isOFuncionario($user, $funcionario);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Funcionario  $funcionario
     * @return mixed
     */
    public function delete(User $user, Funcionario $funcionario)
    {
        return $this->isGerente($user) or ($this->isFuncionario($user) and $this->isOFuncionario($user, $funcionario));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Funcionario  $funcionario
     * @return mixed
     */
    public function restore(User $user, Funcionario $funcionario)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Funcionario  $funcionario
     * @return mixed
     */
    public function forceDelete(User $user, Funcionario $funcionario)
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
    public function isFuncionario(User $user): bool
    {
        return $user->tipo == 'funcionario';
    }

    /**
     * @param User $user
     * @param Funcionario $funcionario
     * @return bool
     */
    public function isOFuncionario(User $user, Funcionario $funcionario): bool
    {
        return $user->pessoa->funcionario->id == $funcionario->id;
    }
}
