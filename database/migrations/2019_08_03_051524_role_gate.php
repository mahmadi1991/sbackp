<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleGate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('role_gate', function(Blueprint $table)
		{
			$table->bigIncrements('id')->nullable();
			$table->unsignedBigInteger('roleId')->nullable();
			$table->unsignedBigInteger('gateId')->nullable();
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
		Schema::dropIfExists('role_gate');
	}
}
