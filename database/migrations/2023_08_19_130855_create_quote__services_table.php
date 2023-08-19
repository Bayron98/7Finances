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
        Schema::create('quote__services', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('quantite');
            $table->float('prix_unitaire');
            $table->float('prix_ht');
            $table->foreignId('quote_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote__services');
    }
};
