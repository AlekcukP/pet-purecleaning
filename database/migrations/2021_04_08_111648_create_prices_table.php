<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->float('price_per_footage');
            $table->float('deep_type_coef');
            $table->float('movein_type_coef');
            $table->float('moveout_type_coef');
            $table->float('remodeling_type_coef');
            $table->tinyInteger('extra_fridge');
            $table->tinyInteger('extra_oven');
            $table->tinyInteger('extra_garage');
            $table->tinyInteger('extra_laundary');
            $table->tinyInteger('extra_blinds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
