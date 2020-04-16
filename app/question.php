<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    public $timestamps = false;
    public function exam(){
        return $this->belongsTo('\App\exam');
    }
    public function answers(){
        return $this->hasMany('\App\answer');
    }
}
