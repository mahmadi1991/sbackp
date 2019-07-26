<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('address', function (Blueprint $table) {
			$table->bigIncrements('id')->nullable();
			$table->string('hash', 10)->nullable()->unique();
			$table->unsignedBigInteger('userId')->nullable();
			$table->unsignedBigInteger('areaId')->nullable();
			$table->string('postalCode', 10)->nullable();
			$table->string('address', 1000)->nullable();
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
		Schema::dropIfExists('address');
	}
}
