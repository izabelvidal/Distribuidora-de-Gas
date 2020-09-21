<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public static $rules = [
        'name' => 'required|min:5|max:100',
        'email' => 'required|min:5|max:100',
        'password' => 'required|min:8|confirmed',
    ];

    public static $messages = [
        'name.*' => 'O campo name é obrigatório e deve ter entre 5 e 100 caracteres',
        'email.*' => 'O campo email é obrigatório e deve ter entre 5 e 100 caracteres',
        'password.*' => 'O campo password é obrigatório e deve ter 8 caracteres(A-Z ou a-z e números)',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
