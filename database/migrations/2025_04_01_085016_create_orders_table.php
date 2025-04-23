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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('full_name'); 
            $table->string('email'); 
            $table->string('phone'); 
            $table->string('postal_code'); 
            $table->string('country'); 
            $table->string('region_city');
            $table->text('address');

            $table->decimal('total_price', 10, 2)->unsigned();
            $table->unsignedInteger('total_quantity')->default(1);
            $table->string('status')->default('pending');
            $table->string('payment_id')->default('');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
