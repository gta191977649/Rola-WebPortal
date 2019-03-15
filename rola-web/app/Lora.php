<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lora extends Model
{
    //
    protected $fillable = [
        'name',
        'user_id',
        'dim',
        'indicator_r',
        'indicator_g',
        'indicator_b',
        'description'
    ];
    public function owner()
    {
        return $this->belongsTo("App\User")->withTrashed();
    }

    public function statements()
    {
        return $this->hasMany('App\LightStatement');
    }
}
