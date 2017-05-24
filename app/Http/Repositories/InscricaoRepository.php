<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/05/2017
 * Time: 23:52
 */

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\InscricaoModel;


class InscricaoRepository extends Repository
{
    public function __construct(InscricaoModel $inscricao)
    {
        $this->model = $inscricao;
    }

    public function getUserInscricao($user)
    {
        return $this->model
            ->select('id','palestra','tipo')
            ->where('user', '=', $user)
            ->get()->toArray();


    }

}