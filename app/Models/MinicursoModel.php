<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class MinicursoModel extends BaseModel
{

    protected $table = 'minicurso';

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
        'titulo', 'descricao', 'cronograma','area','professor','criador','local','material'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
