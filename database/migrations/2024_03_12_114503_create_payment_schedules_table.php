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
        Schema::create('payment_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_id')->constrained()->cascadeOnDelete();
            $table->date('paymentDate1');
            $table->unsignedBigInteger('paymentAmount1');
            $table->date('paymentDate2');
            $table->unsignedBigInteger('paymentAmount2');
            $table->date('paymentDate3');
            $table->unsignedBigInteger('paymentAmount3');
            $table->date('paymentDate4');
            $table->unsignedBigInteger('paymentAmount4');
            $table->date('paymentDate5');
            $table->unsignedBigInteger('paymentAmount5');
            $table->date('paymentDate6');
            $table->unsignedBigInteger('paymentAmount6');
            $table->date('paymentDate7');
            $table->unsignedBigInteger('paymentAmount7');
            $table->date('paymentDate8');
            $table->unsignedBigInteger('paymentAmount8');
            $table->date('paymentDate9');
            $table->unsignedBigInteger('paymentAmount9');
            $table->date('paymentDate10');
            $table->unsignedBigInteger('paymentAmount10');
            $table->date('paymentDate11');
            $table->unsignedBigInteger('paymentAmount11');
            $table->date('paymentDate12');
            $table->unsignedBigInteger('paymentAmount12');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_schedules');
    }
};
