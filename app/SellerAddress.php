<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellerAddress extends Model
{
    public function seller() {
        return $this->belongsTo('App\Seller');
    }
}
