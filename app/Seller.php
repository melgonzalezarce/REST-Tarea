<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function sellerAddress() {
        return $this->hasOne('App\SellerAddress');
    }
}
