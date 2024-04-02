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
        Schema::create('leave_staff_entitlements', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('year');
            $table->foreignId('staff_id')->constrained();
            $table->foreignId('leave_id')->constrained();
            $table->unsignedTinyInteger('entitled_curr_year');
            $table->unsignedInteger('accumlated')->default(0);
            $table->unsignedTinyInteger('consumed_curr_year')->default(0);
            $table->unsignedInteger('encashed_curr_year')->default(0);
            $table->unsignedInteger('total_encashed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_staff_entitlements');
    }
};
