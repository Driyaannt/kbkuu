<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultMethodKBsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_method_k_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_akseptor');
            $table->string('nama_suami');
            $table->string('pendidikan_terakhir');
            $table->string('tujuan_kb');
            $table->string('section');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('pregnancy_status');
            $table->string('age_category');
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
        Schema::dropIfExists('result_method_k_b_s');
    }
}
