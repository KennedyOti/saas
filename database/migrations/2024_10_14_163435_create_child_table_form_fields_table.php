<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('app_id');
            $table->unsignedBigInteger('form_id');
            $table->string('field_name', 50);
            $table->string('field_description', 100);
            $table->string('mouse_hover_tip', 100);
            $table->string('field_type', 10);
            $table->unsignedBigInteger('field_size')->nullable();
            $table->unsignedBigInteger('decimals')->nullable();
            $table->string('field_format', 10);
            $table->text('remarks')->nullable();
            $table->timestamps();
    
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('child_table_form_fields');
    }
};
