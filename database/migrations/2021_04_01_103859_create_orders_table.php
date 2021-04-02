<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            //Personal info
            $table->string('address', 200);
            $table->integer('apt')->nullable();
            $table->string('city', 50);
            $table->integer('footage');
            $table->tinyInteger('bedrooms');
            $table->tinyInteger('bathrooms');
            $table->string('cleaning_frequency', 15);
            $table->string('cleaning_type', 30);
            $table->string('cleaning_date', 30);
            //Your home
            $table->string('pets', 4);
            $table->tinyInteger('pets_total');
            $table->tinyInteger('adults');
            $table->tinyInteger('child');
            $table->tinyInteger('cleanliness');
            $table->boolean('previous_clean');
            $table->string('previous_different', 1000)->nullable();
            //Materials
            $table->string('flooring_types', 200);
            $table->string('countertops_types', 200);
            $table->boolean('stainless_appliances');
            $table->string('stove_type', 10);
            $table->boolean('shower_glass');
            $table->string('special_attention', 1000)->nullable();
            $table->string('else_info', 1000)->nspecial_attentionullable();
            //Extras
            $table->boolean('extra_fridge')->nullable();
            $table->boolean('extra_oven')->nullable();
            $table->boolean('extra_garage')->nullable();
            $table->boolean('extra_laundary')->nullable();
            $table->boolean('extra_blinds')->nullable();
            //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
