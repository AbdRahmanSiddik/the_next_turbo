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
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->string('token_registrasi');
            $table->string('foto_profil');
            $table->string('email');
            $table->string('nama');
            $table->string('nim');
            $table->string('kelas');
            $table->enum('angkatan', ['2022', '2023']);
            $table->string('link_portofolio');
            $table->text('alasan');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi');
    }
};
