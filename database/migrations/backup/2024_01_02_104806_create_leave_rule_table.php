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
        Schema::create('leave_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leave_id')->constrained();
            //columns for carry_forwardable
            $table->enum('carry_forwardable',['Yes','No'])->default('No');
            $table->string('cf_gcr')->nullable();
            $table->date('cf_wef');
            $table->date('cf_closing_date')->nullable();
            $table->string('cf_closing_gcr')->nullable();
            $table->integer('max_cf')->default(0);
            //columns for encashable
            $table->enum('encashable',['Yes','No'])->default('No');
            $table->string('enc_gcr')->nullable();
            $table->date('enc_wef');
            $table->date('enc_closing_date')->nullable();
            $table->string('enc_closing_gcr')->nullable();
            $table->integer('max_enc')->default(0);
            //columns for gap between leaves
            $table->enum('gap',['Yes','No'])->default('No');
            $table->string('gap_gcr')->nullable();
            $table->date('gap_wef');
            $table->date('gap_closing_date')->nullable();
            $table->string('gap_closing_gcr')->nullable();
            $table->integer('max_gap')->default(0);
            $table->integer('max_time_allowed')->nullable();
            //column for piror itmination
            $table->integer('prior_intimation_days')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_rule');
    }
};
