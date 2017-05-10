<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/05/2017
 * Time: 23:52
 */

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\MinicursoModel;


class MinicursoRepository extends Repository
{
    public function __construct(MinicursoModel $minicursos)
    {
        $this->model = $minicursos;
    }

}