<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1521448674PropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('properties')) {
            Schema::create('properties', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('address');
                $table->string('type')->nullable();
                $table->string('location')->nullable();
                $table->string('phone')->nullable();
                $table->string('photo')->nullable();
                $table->string('area')->nullable();
                $table->string('price')->nullable();
                $table->string('description')->nullable();

                // $table->integer('user_id')->unsigned()->nullable();
                // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
