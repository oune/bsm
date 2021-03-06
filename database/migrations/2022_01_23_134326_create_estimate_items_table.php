<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimate_items', function (Blueprint $table) {
            $table->primary('id');
            $table->integer('id');
            $table->integer('estimate_id');
            $table->integer('item_id');
            $table->integer('quantity')->nullable();
            $table->integer('suggested_unit_price')->nullable();
            $table->integer('total_offer_price')->nullable();
            $table->integer('price_include_tax')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimate_items');
    }
}
