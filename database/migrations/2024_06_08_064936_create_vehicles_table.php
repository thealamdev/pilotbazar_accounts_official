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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('color_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('model_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('model_year_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('registratrion_number')->nullable();
            $table->string('chassis_number')->nullable();
            $table->string('engine_number')->nullable();
            $table->date('purchase_date')->nullable();
            $table->double('purchase_price');
            $table->double('media_cost_purchase')->nullable();
            $table->double('media_cost_selling')->nullable();
            $table->double('checkup_cost_purchase')->nullable();
            $table->double('estimate_cost')->nullable();
            $table->double('touchup_cost')->nullable();
            $table->double('engine_service_cost')->nullable();
            $table->double('fuel_cost')->nullable();
            $table->double('bikroy_ad_cost')->nullable();
            $table->double('facebook_ad_cost')->nullable();
            $table->double('paper_update_cost')->nullable();
            $table->double('seat_cover_cost')->nullable();
            $table->double('electric_cost')->nullable();
            $table->double('total_cost')->nullable();
            $table->boolean('sell_status')->default(0)->comment('sell = 1, not sell = 0');
            $table->boolean('status');
            $table->foreignId('created_by')->constrained('users')->onUpdate('cascade')->onDelete('cascade')->name('created_by_fk');
            $table->foreignId('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade')->name('updated_by_fk');
            $table->foreignId('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade')->name('deleted_by_fk');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
