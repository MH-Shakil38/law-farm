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
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Client's First Name
            $table->string('email')->unique(); // Email Address
            $table->string('phone')->nullable(); // Phone Number
            $table->string('phone2')->nullable(); // Phone Number
            $table->string('address')->nullable(); // Address
            $table->string('city')->nullable(); // City
            $table->string('state')->nullable(); // State
            $table->string('zip_code')->nullable(); // Postal Code
            $table->string('country')->nullable(); // Countryc
            $table->unsignedBigInteger('case_type')->nullable(); // Case Number
            $table->unsignedBigInteger('lawyer_id')->nullable(); // Case Number
            $table->string('case_number')->unique()->nullable(); // Case Number
            $table->longText('case_details')->nullable(); // Case Details
            $table->longText('short_details')->nullable(); // Case Details
            $table->date('hearing_date')->nullable(); // Case hearing date
            $table->time('hearing_time')->nullable(); // Case hearing time
            $table->date('date_of_birth')->nullable(); // Date of Birth
            $table->string('nationality')->nullable(); // Nationality
            $table->string('passport_number')->nullable(); // Passport Number (if applicable)
            $table->string('status')->default(1); // Status (e.g., 1 = Active, 0 = Inactive)
            $table->string('image')->nullable();
            $table->string('ref_by')->nullable();
            $table->string('direction')->nullable();
            $table->string('gender')->nullable();
            $table->string('marrital_status')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
