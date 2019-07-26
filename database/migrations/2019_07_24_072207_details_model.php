<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailsModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('details_model', function (Blueprint $table) {
			$table->bigIncrements('id')->nullable();
			$table->string('hash', 10)->nullable()->unique();
			$table->unsignedBigInteger('parentId')->nullable();
			$table->string('title', 10)->nullable();
			$table->integer('cost')->nullable();
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
		Schema::dropIfExists('details_model');
	}
}
