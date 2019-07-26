<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function(Blueprint $table)
        {
            $table->bigIncrements('id')->nullable();
            $table->string('hash', 10)->unique()->nullable();
            $table->unsignedBigInteger('cityId')->nullable();
            $table->string('name', 45)->nullable();
            $table->string('family', 100)->nullable();
            $table->string('slug', 225)->nullable();
            $table->string('username', 20)->nullable();
            $table->string('password', 64)->nullable();
            $table->string('mobile', 11)->nullable();
            $table->string('tellPhone', 20)->nullable();
            $table->string('nationalCode', 10)->nullable();
            $table->date('birthDate')->nullable();
            $table->string('email')->nullable();
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            //$table->enum('type', ['ADMIN', 'HOST', 'USER'])->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->nullable()->default('INACTIVE');
            $table->string('api_token', 100)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->unsignedBigInteger('creatorId')->nullable();
            $table->unsignedBigInteger('updaterId')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
