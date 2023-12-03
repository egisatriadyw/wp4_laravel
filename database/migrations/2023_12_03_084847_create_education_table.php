<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->string('tingkat_pendidikan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('nama_instansi')->nullable();
            $table->string('tahun_masuk')->nullable();
            $table->string('tahun_lulus')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('education');
    }
};
