<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlCategory extends Model
{

    protected $fillable =
        [
            'id',
            'title'
        ];

    public function articles(){

        return $this->belongsTo('App\Article', 'id', 'cate_id');
    }
}
