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
        Schema::create('vehicle_sell_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('payment_method_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('credit_bank')->nullable();
            $table->foreign('credit_bank')->references('id')->on('pbl_banks')->onDelete('cascade')->onUpdate('cascade')->name('credit_bank_by_fk');
            $table->string('account_holder_name');
            $table->string('debit_bank_name')->nullable();
            $table->string('debit_bank_account_number')->nullable();
            $table->string('amount');
            $table->longText('remarks')->nullable();
            $table->date('date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_sell_payments');
    }
};
