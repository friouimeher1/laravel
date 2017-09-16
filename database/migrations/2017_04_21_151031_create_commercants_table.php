<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercants', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('prenom');
          $table->string('adresse');
          $table->string('lng');
          $table->string('lat');
          $table->string('email')->unique();
          $table->string('telephone');
          $table->string('password');
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
        Schema::dropIfExists('commercants');
    }
}
