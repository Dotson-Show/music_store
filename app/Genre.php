<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guareded = [];


    public function music()
    {
        return $this->belongsToMany(Music::class);
    }

}
