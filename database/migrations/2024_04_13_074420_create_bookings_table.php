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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('tourist_id');
            $table->string('email');
            $table->string('code');
            $table->string('number');
            $table->string('image')->nullable();
            $table->text('address');
            $table->string('chooseroom');
            $table->integer('quantity');
            $table->double('amount');
            $table->string('payment_status');
            $table->string('transaction_id');
            $table->string('status')->default('Pending');
            $table->boolean('canceled')->default(false);
            $table->boolean('refund_processed')->default(false); // Add refund_processed column
            $table->decimal('final_amount', 10, 2)->nullable(); // Add final_amount column
            $table->string('destination');
            $table->string('pickupdate');
            $table->string('startingpoint');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
