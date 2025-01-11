<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisionersTable extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisioners', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->integer('jumlah_anak');
            $table->string('kb1');
            $table->string('kb2');
            $table->string('kb3');
            $table->string('kb4');
            $table->string('kb5');
            $table->string('kb6');
            $table->string('kb7');
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
            $table->string('q5');
            $table->string('q6');
            $table->string('action1');
            $table->string('action2');
            $table->string('action3');
            $table->string('action4');
            $table->string('action5');
            $table->string('action6');
            $table->string('action7');
            $table->string('action8');
            $table->string('action9');
            $table->string('action10');
            $table->integer('pengetahuan_percentage');
            $table->string('pengetahuan_kategori');
            $table->integer('sikap_percentage');
            $table->string('sikap_kategori');
            $table->integer('tindakan_percentage');
            $table->string('tindakan_kategori');
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuisioners');
    }
}
