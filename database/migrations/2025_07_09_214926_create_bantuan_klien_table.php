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
    Schema::create('bantuan_klien', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // <-- PASTIKAN BARIS INI ADA
        $table->string('subject');
        $table->text('message');
        $table->enum('status', ['Terbuka', 'Ditutup', 'Menunggu Balasan'])->default('Terbuka');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bantuan_klien');
    }
};
