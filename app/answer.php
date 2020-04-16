<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    public $timestamps = false;
    public function exam(){
        return $this->belongsTo('\App\exam');
    }
    public function question(){
        return $this->belongsTo('\App\question');
    }
}
