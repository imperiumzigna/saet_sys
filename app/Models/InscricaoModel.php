<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class InscricaoModel extends BaseModel
{

    protected $table = 'inscricoes';

    protected $searchable = [
        'tipo'=>'like',
        'palestra'=>'like',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'palestra','tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
