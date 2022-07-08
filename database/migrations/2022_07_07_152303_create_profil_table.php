<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->dateTime('tgl_lahir');
            $table->string('jekel');
            $table->string('nama_instansi');
            $table->string('jabatan');
            $table->foreignId('province_id')->constrained('indonesia_provinces');
            $table->foreignId('city_id')->constrained('indonesia_cities');
            $table->string('no_telp');
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
        Schema::dropIfExists('profil');
    }
}
