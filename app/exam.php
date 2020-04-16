<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    public $timestamps = false;
    public function questions(){
        return $this->hasmany('\App\question');
    }
}
