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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('knowledge_id'); // id de la carte
            $table->unsignedBigInteger('user_id')->nullable(); // optionnel, si user connecté
            $table->integer('value'); 
            $table->timestamps();

            $table->foreign('knowledge_id')->references('id')->on('knowledges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
