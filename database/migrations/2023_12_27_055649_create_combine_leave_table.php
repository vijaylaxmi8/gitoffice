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
        Schema::create('combine_leave', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leave_id')->constrained();
            $table->unsignedBigInteger('combined_id');
            $table->foreign('combined_id')->references('id')->on('leaves');
            $table->enum('sandwitchable',['bothsides','oneside']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combine_leave');
    }
};
