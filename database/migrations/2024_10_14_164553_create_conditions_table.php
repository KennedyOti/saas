<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('condition_name', 50);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('form_id')->nullable();
            $table->string('open_bracket', 1)->nullable();
            $table->string('first_field_name')->nullable();
            $table->string('operator', 10)->nullable();
            $table->string('constant_name', 100)->nullable();
            $table->string('second_field_name')->nullable();
            $table->string('join', 5)->nullable();
            $table->string('close_bracket', 1)->nullable();
            $table->timestamps();
    
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('conditions');
    }
};
