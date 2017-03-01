<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public function labels() {
        return $this->belongsToMany('App\Label');
    }

    public function reviews() {
        return $this->hasMany('App\Review');
    }
}
