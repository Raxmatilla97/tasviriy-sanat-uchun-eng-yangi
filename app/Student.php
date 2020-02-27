<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
            'ismi',
            'familyasi',
            'sharifi',
            'yashash_manzili',
            'tell_nomer',
            'surat',
            'pass_num',
            'pass_ser',
            'tugulgan_kun',
            'guruh_id',
            'talim_shakli',
            'pass_copy',
            'tugulgan_oy',
            'tugulgan_yil',
            'tugulgan_joy',

    ];

    protected $primaryKey = 'id';
}
