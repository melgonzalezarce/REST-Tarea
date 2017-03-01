<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SellerAddressSeller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('seller_address_seller', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seller_address_id')->unsigned();
            $table->foreign('seller_address_id')->references('id')->on('seller_addresses');
            $table->integer('seller_id')->unsigned();
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('seller_address_seller');
    }
}
