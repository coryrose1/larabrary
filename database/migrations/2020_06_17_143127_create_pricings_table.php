<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('amount')->default(0);
            $table->string('cadence')->default('once');
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->boolean('on_sale')->default(0);
            $table->unsignedInteger('on_sale_amount')->default(0);
            $table->dateTime('on_sale_until')->nullable();
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
        Schema::dropIfExists('pricings');
    }
}
