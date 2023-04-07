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
        Schema::create('shares', function (Blueprint $table) {
            $table->id();
            $table->string('share_holders_id');
            $table->string('share_name')->unique();
            $table->string('duration');
            $table->decimal('total_amount',10,2)->default(0.00);
            $table->string('installation_type')->comment('1-monthly,1-quaterly,2-annual,4-custom');;
            $table->string('installation_start_date');
            $table->string('payment_mode');
            $table->string('office_staff');
            $table->boolean('complete_status')->default(0)->comment('0-incomplete,1-complete');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shares');
    }
};
