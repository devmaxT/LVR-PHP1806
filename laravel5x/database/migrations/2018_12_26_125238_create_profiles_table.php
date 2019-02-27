<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('fullname',60);
            $table->string('nickname',60)->nullable(); // duoc phep rong
            $table->string('email',60)->unique();
            $table->string('phone',11);
            $table->text('address');
            $table->date('birthday');
            $table->tinyInteger('gender')->default(0);
            $table->tinyInteger('single')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->text('description');
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
        Schema::dropIfExists('profiles');
    }
}
