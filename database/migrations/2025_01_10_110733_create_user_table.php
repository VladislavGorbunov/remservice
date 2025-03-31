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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('avatar');
            $table->string('name');
            $table->string('lastname');
            $table->integer('region_id');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->integer('phone_verify')->default(0);
            $table->text('aboutme')->nullable();
            $table->integer('experience')->nullable(); // Опыт работы
            $table->float('avg_estimation')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('isAdmin')->default(0);
            $table->integer('isMaster')->default(0);
            $table->integer('isClient')->default(0);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
