<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('indicator_switch');/* 0 - 255 */
            $table->integer('indicator_r');/* 0 - 255 */
            $table->integer('indicator_g');/* 0 - 255 */
            $table->integer('indicator_b');/* 0 - 255 */
            $table->integer('user_id')->nullable();//FK
            $table->float('dim');
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
        Schema::dropIfExists('loras');
    }
}
