<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/05/2017
 * Time: 23:52
 */
use Illuminate\Support\Facades\Auth;
use App\PalestraModel;

class PalestraRepository extends Repository
{
    public function __construct(PalestraModel $palestras)
    {
        $this->model = $palestras;
    }

}