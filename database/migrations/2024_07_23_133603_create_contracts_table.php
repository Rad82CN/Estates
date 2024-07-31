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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('estate_id')->constrained('estates')->cascadeOnDelete();
            $table->string('phone_number');
            $table->string('seller_name');
            $table->string('buyer_name');
            $table->integer('seller_id_number');
            $table->integer('buyer_id_number');
            $table->string('description');
            $table->string('seller_address');
            $table->string('buyer_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
