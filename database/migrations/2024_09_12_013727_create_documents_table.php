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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('document_type')->nullable();
            $table->string('purpose')->nullable();
            $table->string('name');
            $table->string('program')->nullable();
            $table->integer('quantity');
            $table->string('action_needed');
            $table->date('date_forwarded')->nullable();
            $table->date('date_returned')->nullable();
            $table->string('status');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
