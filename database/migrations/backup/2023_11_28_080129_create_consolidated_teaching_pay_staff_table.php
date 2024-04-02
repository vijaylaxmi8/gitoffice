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
        Schema::create('consolidated_teaching_pay_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained();
            $table->foreignId('consolidated_teaching_pay_id')->constrained();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('gcr');
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consolidated_teaching_pay_staff');
    }
};
