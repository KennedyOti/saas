<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('workflow_approvals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('app_id')->nullable();
            $table->unsignedBigInteger('form_id')->nullable();
            $table->unsignedBigInteger('record_id')->nullable();
            $table->string('approval_status', 20)->default('Pending');
            $table->text('comments')->nullable();
            $table->string('approved_by', 20)->nullable();
            $table->timestamp('approved_on')->nullable();
            $table->timestamps();
    
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('workflow_approvals');
    }
};
