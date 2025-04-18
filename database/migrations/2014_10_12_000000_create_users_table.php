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
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('phone1')->nullable();
            $table->string('specialization')->nullable();
            $table->unsignedBigInteger('lawyer_type')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->integer('user_type')->nullable();
            $table->tinyInteger('isActive')->default(1);
            $table->integer('role_id')->nullable();
            $table->string('ip')->nullable();
            $table->string('ip1')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamp('last_activity')->nullable();
            $table->timestamp('last_logedin')->nullable();
            $table->enum('isOnline', ['online', 'offline'])->default('offline');
            $table->rememberToken();
            $table->timestamps();
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
