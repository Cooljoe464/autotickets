<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rand');
            $table->string('amount');
            $table->bigInteger('category');
            $table->string('payment_id');
            $table->timestamps();
            // Category 0 = viewers, 1 = GoCart Riders.
            // https://appdividend.com/2022/02/28/generate-pdf-in-laravel/ to generate pdf
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
