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
            $table->string('address', 200)->nullable();
            $table->integer('apt')->nullable();
            $table->string('city', 50)->nullable();
            $table->integer('footage')->nullable();
            $table->tinyInteger('bedrooms');
            $table->float('bathrooms');
            $table->string('cleaning_frequency', 15)->nullable();
            $table->string('cleaning_type', 30)->nullable();
            $table->string('cleaning_date', 30)->nullable();
            //Your home
            $table->string('pets', 4)->nullable();
            $table->tinyInteger('pets_total')->nullable();
            $table->tinyInteger('adults')->nullable();
            $table->tinyInteger('child')->nullable();
            $table->tinyInteger('cleanliness')->nullable();
            $table->boolean('previous_clean')->nullable();
            $table->string('previous_different', 1000)->nullable();
            //Materials
            $table->string('flooring_types', 200)->nullable();
            $table->string('countertops_types', 200)->nullable();
            $table->boolean('stainless_appliances')->nullable();
            $table->string('stove_type', 10)->nullable();
            $table->boolean('shower_glass')->nullable();
            $table->string('special_attention', 1000)->nullable();
            $table->string('else_info', 1000)->nullable();
            //Extras
            $table->boolean('extra_fridge')->default(0);
            $table->boolean('extra_oven')->default(0);
            $table->boolean('extra_garage')->default(0);
            $table->boolean('extra_laundary')->default(0);
            $table->boolean('extra_blinds')->default(0);
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
