<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/05/2017
 * Time: 20:31
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Stevebauman\EloquentTable\TableTrait;

class BaseModel extends Model
{
    use TableTrait;

    protected $searchable = [];

    protected $primaryKey = 'id';

    public static function boot()
    {
        parent::boot();
    }

    public function searchable()
    {
        return $this->searchable;
    }

    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    public function getTable()
    {
        return $this->table;
    }
}
