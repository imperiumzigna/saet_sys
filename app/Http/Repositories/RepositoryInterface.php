<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/05/2017
 * Time: 20:41
 */
namespace App\Repositories;

interface RepositoryInterface
{
    public function paginateRequest(array $requestParams);
}