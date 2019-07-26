<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function(Blueprint $table)
        {
            $table->bigIncrements('id')->nullable();
            $table->string('hash', 10)->unique()->nullable();
            $table->unsignedBigInteger('userId')->nullable();
            $table->unsignedBigInteger('cityId')->nullable();
            $table->unsignedBigInteger('fabricId')->nullable();
            $table->unsignedBigInteger('addressId')->nullable();
            $table->unsignedBigInteger('sizeId')->nullable();
            $table->unsignedBigInteger('areaId')->nullable();
            $table->unsignedBigInteger('dishdashaModelId')->nullable();
            $table->unsignedBigInteger('discountCodeId')->nullable();
            $table->string('length', 10)->nullable();
            $table->string('age', 10)->nullable();
            $table->string('cost', 10)->nullable();
            $table->string('totalCost', 10)->nullable();
            $table->string('discountCodeAmount', 10)->nullable();
            $table->string('fabricDiscountAmount', 10)->nullable();
            $table->string('detailsCost', 10)->nullable();
            $table->string('measurementCost', 10)->nullable();
            $table->string('transmissionCost', 10)->nullable();
            $table->string('fabricCost', 10)->nullable();
            $table->string('description', 10)->nullable();
            $table->enum('status', ['REGISTERED', 'CANCELED', 'INSEWING'])->nullable()->default('REGISTERED');
            $table->enum('fabric', ['Y', 'N'])->nullable()->default('N');
            $table->enum('dishdasha', ['Y', 'N'])->nullable()->default('N');
            $table->enum('receive', ['INPERSON', 'TRANSMISSION'])->nullable()->default('INPERSON');
            $table->enum('orderType', ['INPERSON', 'INTERNET'])->nullable()->default('INPERSON');
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
        Schema::dropIfExists('order');
    }
}
