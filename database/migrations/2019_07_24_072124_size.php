<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Size extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('size', function (Blueprint $table) {
			$table->bigIncrements('id')->nullable();
			$table->string('hash', 10)->nullable()->unique();
			$table->unsignedBigInteger('userId')->nullable();
			$table->string('length', 10)->nullable()->comment('قد');
			$table->string('shoulderWidth', 10)->nullable()->comment('سر شانه');
			$table->string('chest', 10)->nullable()->comment('دور سینه');
			$table->string('armLength', 10)->nullable()->comment('دور سینه');
			$table->string('waist', 10)->nullable()->comment('کمر');
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
		Schema::dropIfExists('size');
	}
}

