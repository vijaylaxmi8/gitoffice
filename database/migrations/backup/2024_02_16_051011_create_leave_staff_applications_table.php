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
        Schema::create('leave_staff_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leave_id')->constrained();
            $table->foreignId('staff_id')->constrained();
            $table->unsignedBigInteger('alternate');
            $table->foreign('alternate')->references('id')->on('staff');
            $table->unsignedBigInteger('additional_alternate')->nullable;
            $table->foreign('additioanl_alternate')->references('id')->on('staff');
            $table->unsignedBigInteger('recommender');
            $table->foreign('recommender')->references('id')->on('user');
            $table->unsignedBigInteger('approver');
            $table->foreign('approver')->references('id')->on('user');
            $table->date('from_date');
            $table->date('to_date')->nullable;
            $table->enum('appl_status',['recommended','pending','rejected','approved'])->default('pending');
            $table->enum('leave_status',['taken','awaiting'])->default('awaiting');
            $table->unsignedSmallInteger('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_staff_applications');
    }
};
