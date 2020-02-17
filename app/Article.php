<?php

namespace App;
use App\ArticlCategory;
use App\User;
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

        return $this->hasOne(ArticlCategory::class, 'id', 'cate_id');

       }
       // Users tablitsiyasini bog'lash


       public function users(){
        return $this->belongsTo(User::class);
    }
}
