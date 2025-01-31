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
            $table->foreignId('product_customer_id')->constrained('product_customers')->onDelete('cascade');
            $table->date('order_date');//->after('product_customer_id');
            $table->string('order_status')->default('pending');//->after('order_date');
            $table->double('total_amount', 10, 2)->nullable();//->after('order_status');            
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
