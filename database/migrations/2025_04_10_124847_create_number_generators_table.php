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
        Schema::create('number_generators', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();;
            $table->string('slug')->unique();
            $table->longText('description')->nullable();;
            $table->string('keyword')->nullable();;
            $table->string('metatitle')->nullable();;
            $table->text('metadescription')->nullable();;
            $table->text('adsdata')->nullable();;
            $table->enum('adsstatus', ['publish', 'unpublish']);
            $table->enum('status', ['publish', 'unpublish']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('number_generators');
    }
};
