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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('num_facture');
            $table->string('num_bc');
            $table->date('date_facture');
            $table->date('date_echeance');
            $table->decimal('remise', 10, 2);
            $table->text('note_publique');
            $table->text('note_personnelle');
            $table->text('conditions');
            $table->text('pied_page');
            $table->decimal('tva', 5, 2);
            $table->foreignId('client_id')->constrained();
            $table->foreignId('project_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
