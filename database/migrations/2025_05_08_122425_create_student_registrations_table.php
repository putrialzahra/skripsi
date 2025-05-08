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
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('birthplace');
            $table->date('birth_date');
            $table->string('address');
            $table->string('agama');
            $table->string('nama_ortu');
            $table->string('no_hp_ortu');
            $table->string('pendidikan_ortu');
            $table->string('pekerjaan_ortu');
            $table->enum('package', ['Paket A', 'Paket B', 'Paket C']);
            $table->foreignId('academic_year_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_registrations');
    }
};
