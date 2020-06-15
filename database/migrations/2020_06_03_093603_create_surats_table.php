<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_created_id');
            $table->foreign('user_created_id')->references('id')->on('users')
                ->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->string('no_surat');
            $table->string('yth');
            $table->string('dari');
            $table->string('tujuan');
            $table->string('lampiran');
            $table->string('perihal');
            $table->text('pesan');
            $table->text('disetujui_oleh')->nullable();
            $table->dateTime('accepted_at')->nullable();
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
        Schema::dropIfExists('surats');
    }
}
