<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiscountCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_code', function(Blueprint $table)
        {
            $table->bigIncrements('id')->nullable();
            $table->string('hash', 10)->unique()->nullable();
            $table->unsignedBigInteger('userId')->nullable();
            $table->string('code', 100)->nullable();
            $table->enum('calculationMethod', ['PERCENT', 'AMOUNT'])->nullable()->default('PERCENT');
            $table->enum('type', ['PUBLIC', 'PRIVATE'])->nullable()->default('PUBLIC');
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('amount', 100)->nullable();
            $table->enum('disposable', ['Y', 'N'])->nullable()->default('Y');
            $table->text('description')->nullable();
            $table->string('slug', 225)->nullable();
            $table->enum('status', ['ACTIVE', 'EXPIRE', 'REUSE'])->nullable()->default('ACTIVE');
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
        Schema::dropIfExists('discount_code');
    }
}
