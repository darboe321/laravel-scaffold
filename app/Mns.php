<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mns extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mns_code',	'mns_type',	'quarter_id','pre_paid',	'post_paid',
    ];
/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'mno_id',	
    ];

    protected $dates = ['deleted_at'];
   
}
