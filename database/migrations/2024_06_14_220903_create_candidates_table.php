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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('full_name');
            $table->enum('type_candidat', ['0', '1']);
            $table->enum('grade', ['Professeur', 'Docteur', 'Monsieur', 'Madame', 'Etudiant']);
            $table->enum('sexe', ['H', 'F']);
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('job')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('affiliation');
            $table->enum('status', ['Default', 'Valide', 'NotValide']);
            $table->enum('type_com', ['0', '1']);
            $table->string('projet_file');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
