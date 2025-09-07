<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100)->unique();
            $table->string('password_hash', 255);
            $table->string('nama', 150);
            $table->string('email', 150)->nullable();
            $table->string('phone', 30)->nullable();
            $table->enum('role', [
                'Siswa',
                'Kepala Sekolah',
                'Waka Kesiswaan',
                'Waka Kurikulum',
                'BK',
                'Tata Usaha'
            ]);
            $table->string('profile', 255)->nullable(); // link foto profil
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
