<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('notification_name', 50);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('condition_id')->nullable();
            $table->text('email_notification')->nullable();
            $table->text('whatsapp_notification')->nullable();
            $table->timestamps();
    
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('condition_id')->references('id')->on('conditions')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
