<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/05/2017
 * Time: 21:15
 */

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\PaginasModel;

class PaginasRepository extends Repository
{
    public function __construct(PaginasModel $paginas)
    {
        $this->model = $paginas;
    }

}