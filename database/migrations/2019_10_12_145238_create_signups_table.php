<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birth');
            $table->string('email');
            $table->string('password');
            $table->string('retype');
            $table->string('position');
            $table->string('type')->NULL;
            $table->string('expr')->NULL;
            $table->string('office')->NULL;
            $table->string('work')->NULL;

            $table->string('phone');
            $table->text('facebook')->NULL;
            $table->text('twitter')->NULL;
            $table->text('linkedIn')->NULL;
            $table->text('address');
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
        Schema::dropIfExists('signups');
    }
}
