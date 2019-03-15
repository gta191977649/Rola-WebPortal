<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LightStatement extends Model
{
    //
    protected $fillable = [
        "lora_id",
        "dim",
        'indicator_r',
        'indicator_g',
        'indicator_b',
        'start_time',
        'end_time',
    ];

    public function owner()
    {
        return $this->belongsTo("App\Lora")->withTrashed();
    }
}
