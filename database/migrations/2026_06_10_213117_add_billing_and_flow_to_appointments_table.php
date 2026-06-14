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
        Schema::table('appointments', function (Blueprint $table) {

            $table->decimal('billing_amount', 10, 2)->nullable();

            $table->string('payment_status')->default('Unpaid');

            $table->text('payment_note')->nullable();

            $table->string('next_department')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {

            $table->dropColumn([
                'billing_amount',
                'payment_status',
                'payment_note',
                'next_department'
            ]);

        });
    }
};
