<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    private $guarded = [];

    public function music()
    {
        return $this->hasMany(Music::class);
    }
}
