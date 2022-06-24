<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('nama',100);
            $table->string('jk',10);
            $table->string('tgl_lahir',100);
            $table->string('agama',100);
            $table->string('alamat',100);
            $table->string('no_hp',15);
            $table->string('pendidikan_terakhir',100);
            $table->string('email',100);
            $table->string('foto',255);
            $table->bigInteger('jabatan_id');
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
        Schema::dropIfExists('karyawan');
    }
}
