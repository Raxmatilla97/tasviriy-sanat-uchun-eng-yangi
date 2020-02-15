<?php

namespace App;
use App\ArticlCategory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable =
        [
            'title',
            'id',
            'alias',
            'img',
            'desc',
            'comments',
            'user_id',
            'cate_id'

        ];
        // yangiliklar bo'limlarini bog'lash
       public function category(){

        return $this->hasOne('App\ArticlCategory', 'id', 'cate_id');

       }
       // Users tablitsiyasini bog'lash
       public function users(){

        return $this->hasOne('App\User', 'id', 'user_id');

       }
}