<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_laporan', function (Blueprint $table) {
            $table->increments('id_laporan');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('lat');
            $table->string('long');
            $table->string('current_possition');
            $table->string('tingkat_kerusakan');
            $table->string('keterangan');
            $table->string('foto');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_laporan', function(Blueprint $table)
        {
    
            $table->dropForeign('tb_laporan_id_user_foreign');
            $table->dropColumn('id_user');
    
        });
    }
}
