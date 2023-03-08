<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelakus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoriusaha_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kecamatan_id')->constrained()->cascadeOnDelete();
            $table->foreignId('desa_id')->constrained()->cascadeOnDelete();
            $table->foreignId('jenisuttp_id')->constrained()->cascadeOnDelete();
            $table->string('nik');
            $table->string('nama');
            $table->string('nama_usaha');
            $table->string('alamat');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelakus');
    }
};
