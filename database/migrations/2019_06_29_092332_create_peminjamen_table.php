<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_buku')->unsigned();
            $table->string('nama', '50');
            $table->enum('jk',['Laki-Laki', 'Perempuan']);
            $table->text('alamat');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->date('tgl_bts_kembali');
            $table->enum('status',['1', '0']);
            $table->string('created_by', '20')->nullable();
            $table->string('updated_by', '20')->nullable();
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
        Schema::dropIfExists('peminjamen');
    }
}
