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
        Schema::create('vehicle_buy_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('payment_method_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('debit_bank')->nullable();
            $table->foreign('debit_bank')->references('id')->on('pbl_banks')->onDelete('cascade')->onUpdate('cascade')->name('debit_bank_by_fk');
            $table->string('debit_bank_account_number')->nullable();
            $table->string('account_holder_name');
            $table->string('credit_bank_name')->nullable();
            $table->string('credit_bank_account_number')->nullable();
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
        Schema::dropIfExists('vehicle_buy_payments');
    }
};
