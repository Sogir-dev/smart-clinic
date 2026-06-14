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

            $table->string('doctor_name')->nullable();

            $table->text('prescription')->nullable();

            $table->text('doctor_comment')->nullable();

            $table->date('next_visit_date')->nullable();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {

            $table->dropColumn([
                'doctor_name',
                'prescription',
                'doctor_comment',
                'next_visit_date'
            ]);

        });
    }
};
