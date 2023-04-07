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
        Schema::create('share_installments', function (Blueprint $table) {
                $table->id();
                $table->string('share_id');
                $table->date('due_date');
                $table->decimal('installment_amount',10,2)->default('0.00');
                $table->boolean('payment_status')->default(0)->comment('0-notpaid,1-paid');;
                $table->rememberToken();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('share_installments');
       
    }
};
