<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class NoticiaModel extends BaseModel
{

    protected $table = 'noticias';

    protected $searchable = [
        'titulo' =>'like',
        'area'=>'like',
        'professor'=>'like'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'descricao','criador'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
