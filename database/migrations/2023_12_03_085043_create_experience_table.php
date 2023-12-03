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
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->string('organisasi')->nullable();
            $table->string('periode')->nullable();
            $table->string('bidang')->nullable();
            $table->string('jabatan')->nullable();
            $table->text('keterangan')->nullable();
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experience');
    }
};
