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
        Schema::create('tmp_clients', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name')->nullable(); // Client's First Name
            $table->string('first_name'); // Client's First Name
            $table->string('last_name')->nullable(); // Client's First Name
            $table->string('email')->nullable(); // Email Address
            $table->string('phone')->nullable(); // Phone Number
            $table->string('phone2')->nullable(); // Phone Number
            $table->string('address')->nullable(); // Address
            $table->string('alien_number')->nullable(); // Address
            $table->string('city')->nullable(); // City
            $table->string('state')->nullable(); // State
            $table->string('zip_code')->nullable(); // Postal Code
            $table->string('country')->nullable(); // Countryc
            $table->longText('case_details')->nullable(); // Case Details
            $table->unsignedBigInteger('case_type')->nullable(); // Case Details
            $table->date('date_of_birth')->nullable(); // Date of Birth
            $table->string('nationality')->nullable(); // Nationality
            $table->string('status')->default(1); // Status (e.g., 1 = Active, 0 = Inactive)
            $table->string('image')->nullable();
            $table->string('ref_by')->nullable();
            $table->string('direction')->nullable();
            $table->string('gender')->nullable();
            $table->string('marrital_status')->nullable();
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmp_clients');
    }
};
