<?php

use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('cep');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('complemento');
            $table->string('numero');
            $table->string('estado');
            $table->string('cidade');
            $table->timestamps();

            $table->foreignIdFor(Patient::class, 'patient_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
