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
        Schema::create('portfolio_projects', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name', 255); // Project name with length validation
            $table->text('description'); // Project description
            $table->string('technologies', 255); // Technologies used (e.g., Laravel, React)
            $table->string('link', 255)->unique(); // URL link to the project (unique constraint)
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_projects');
    }
};
