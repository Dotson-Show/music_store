<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $guarded = [];

    public function music() {
        return $this->belongsToMany(Music::class);
    }
}
