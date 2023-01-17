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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('address', 100)->nullable();
            $table->string('postal_code', 10);
            $table->string('city', 30);
            $table->string('state', 30);
            $table->string('type', 30);
            $table->unsignedTinyInteger('permises');
            $table->unsignedTinyInteger('rooms');
            $table->unsignedTinyInteger('bathrooms');
            $table->unsignedSmallInteger('square_meters');
            $table->year('year_built');
            $table->float('price', 10,2);
            $table->boolean('is_available')->default(1);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('houses');
    }
};
