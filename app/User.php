<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usr_name' =>'required',
        'cpf' =>'required',
        'usr_email'=>'required',
        'password'=>'required',
        'usr_papel'=>'required'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
        'cpf'];


    public function minicurso()
    {
        return $this->hasMany('App\Models\MinicursoModel');
    }

    public function palestra()
    {
        return $this->hasMany('App\Models\PalestraModel');
    }
}
