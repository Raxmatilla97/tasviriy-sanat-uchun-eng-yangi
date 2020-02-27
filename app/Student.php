<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
            'ismi',
            'familyasi',
            'sharifi',
            'yashash manzili',
            'tell_nomer',
            'surat',
            'pass_num',
            'pass_ser',
            'tugulgan_kun',
            'guruh',
            'talim_shakli',
    ];

    protected $primaryKey = 'id';
}
