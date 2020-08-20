<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $guarded = [];

    public function label() {
        return $this->hasOne(Label::class);
    }

    public function genre() {
        return $this->hasOne(Genre::class);
    }
}
