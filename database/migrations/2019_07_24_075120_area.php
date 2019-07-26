<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Area extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function(Blueprint $table)
        {
            $table->bigIncrements('id')->nullable();
            $table->string('hash', 10)->unique()->nullable();
            $table->unsignedBigInteger('cityId')->nullable();
            $table->string('title', 500)->nullable();
            $table->string('slug', 225)->nullable();
            $table->string('postmanCost', 20)->nullable();
            $table->string('transmissionCost', 20)->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->nullable()->default('INACTIVE');
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
        Schema::dropIfExists('area');
    }
}
