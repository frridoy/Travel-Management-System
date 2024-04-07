<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('startingpoint');
            $table->string('destination');
            $table->dateTime('pickupdate');
            $table->string('duration');
            $table->dateTime('returndate');
            $table->string('totalseat');
            $table->string('price');
            $table->string('spot');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->BigInteger('transport_id')->unsigned();
            $table->foreign('transport_id')->references('id')->on('transports')->onDelete('cascade');
            // $table->foreignId('hotel_id')->constrained('hotels')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('transport_id')->constrained('transport')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
