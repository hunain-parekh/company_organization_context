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
        Schema::create('group_heads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_group_id')->nullable(); // Optional relation to Company Groups
            $table->unsignedBigInteger('employee_id')->nullable(); // Optional relation to Employees
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_heads');
    }
};
