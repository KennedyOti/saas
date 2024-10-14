<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('app_id');
            $table->string('form_name', 50);
            $table->string('form_description', 100);
            $table->unsignedBigInteger('child_form_id')->nullable();
            $table->string('default_form_style', 5);
            $table->text('remarks')->nullable();
            $table->timestamps();
    
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
            $table->foreign('child_form_id')->references('id')->on('forms')->onDelete('set null');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('parent_table_forms');
    }
};
