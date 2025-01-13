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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique(); // Unique email
            $table->string('phone')->nullable();
            $table->text('address')->nullable(); // Nullable text column
            $table->text('description')->nullable(); // Nullable description
            $table->json('other')->nullable(); // Nullable description
            $table->string('image')->nullable(); // Image path
            $table->unsignedBigInteger('case_type')->nullable(); // Image path
            $table->boolean('status')->default(1); // Active/inactive status
            $table->unsignedBigInteger('created_by')->nullable(); // User ID for creator
            $table->unsignedBigInteger('updated_by')->nullable(); // User ID for last updater
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
