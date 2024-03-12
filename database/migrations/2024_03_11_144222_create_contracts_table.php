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
            $table->string('person');
            $table->string('passport');
            $table->date('passport_date');
            $table->string('givenBy');
            $table->text('address');
            $table->string('phone');
            $table->string('product');
            $table->unsignedInteger('amount');
            $table->unsignedBigInteger('total');
            $table->text('description');
            $table->string('buyer');
            $table->string('buyer_passport');
            $table->string('buyer_passport_givenBy');
            $table->date('buyer_passport_date');
            $table->text('buyer_address');
            $table->text('buyer_description');
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
