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
        Schema::table('users', function (Blueprint $table) {
            $table->string('fullname')->nullable()->after('name');
            $table->date('date_of_birth')->nullable()->after('email');
            $table->string('phone')->nullable()->after('date_of_birth');
            $table->string('image')->nullable()->after('phone');
            $table->string('country')->nullable()->after('image');
            $table->string('city')->nullable()->after('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['fullname', 'date_of_birth', 'phone', 'image', 'country', 'city']);
        });
    }
};
