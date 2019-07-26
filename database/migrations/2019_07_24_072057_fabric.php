<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fabric extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('fabric', function (Blueprint $table) {
			$table->bigIncrements('id')->nullable();
			$table->string('hash', 10)->nullable()->unique();
			$table->unsignedBigInteger('parentId')->nullable();
			$table->unsignedBigInteger('parentOrder')->nullable();
			$table->string('title', 100)->nullable();
			$table->integer('cost')->nullable();
			$table->string('picture', 225)->nullable();
			$table->string('pixel', 4000)->collation('ascii_general_ci')->nullable();
			$table->integer('discountPercent')->nullable()->default(0);
			$table->enum('discountStatus', ['Y', 'N'])->default('N')->nullable();
			$table->enum('stockStatus', ['Y', 'N'])->default('Y')->nullable();
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
		Schema::dropIfExists('fabric');
	}
}
