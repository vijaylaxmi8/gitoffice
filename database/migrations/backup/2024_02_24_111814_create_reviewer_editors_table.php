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
        Schema::create('reviewer_editors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained();
            $table->string('title');
            $table->string('journal_name');
            $table->string('publisher_name');
            $table->date('reviewed_date');
            $table->enum('level',['Q1','Q2','Q3','Q4','SCI','Web of Science','Scopus Indexed','UGC General','Other']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_editors');
    }
};
