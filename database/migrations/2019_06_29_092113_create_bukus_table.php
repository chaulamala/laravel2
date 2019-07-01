<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama_buku');
            $table->text('filename');
            $table->integer('id_kategori')->unsigned();
            $table->string('pengarang', '20');
            $table->string('penerbit', '20');
            $table->char('tahun', '4');
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
        Schema::dropIfExists('bukus');
    }
}
