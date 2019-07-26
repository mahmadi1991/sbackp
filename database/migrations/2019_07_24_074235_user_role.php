<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function(Blueprint $table)
        {
            $table->bigIncrements('id')->nullable();
            $table->string('hash', 10)->unique()->nullable();
            $table->unsignedBigInteger('userId')->nullable();
            $table->unsignedBigInteger('roleId')->nullable();
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
        Schema::dropIfExists('user_role');
    }
}
