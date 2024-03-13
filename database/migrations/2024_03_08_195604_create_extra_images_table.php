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
        Schema::create('extra_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id') // relation with table posts
                ->constrained('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('filename');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_images');
    }
};
