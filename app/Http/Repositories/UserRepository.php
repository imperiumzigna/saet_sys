<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/05/2017
 * Time: 20:28
 */
namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\User;

class UserRepository extends Repository
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Verifica se o usuario pode ter acesso a acoes
     * @return bool
     */
    public function hasActions()
    {
        if (Auth::user()->usr_papel == "Administrador") {
            return true;
        }
        return false;
    }
}
