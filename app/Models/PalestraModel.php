<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class PalestraModel extends BaseModel
{
    protected $table = 'palestra';

    protected $searchable = [
        'titulo'=>'like',
        'area'=>'like',
        'professor'=>'like'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'descricao', 'cronograma','area','professor','criador','local'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
