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
            $table->unsignedBigInteger('factorId')->nullable();
            $table->unsignedBigInteger('userId')->nullable();
            $table->unsignedBigInteger('sizeCategoryId')->nullable();
            $table->unsignedBigInteger('cityId')->nullable();
            $table->unsignedBigInteger('fabricId')->nullable();
            $table->unsignedBigInteger('addressId')->nullable();
            $table->unsignedBigInteger('sizeId')->nullable();
            $table->unsignedBigInteger('areaId')->nullable();
            $table->unsignedBigInteger('tailorId')->nullable();
            $table->unsignedBigInteger('dishdashaModelId')->nullable();
            $table->string('length', 10)->nullable();
            $table->string('count', 10)->nullable();
            $table->string('deposit', 10)->nullable();
            $table->string('cost', 10)->nullable();
            $table->string('totalCost', 10)->nullable();
            $table->string('discountAmount', 10)->nullable();
            $table->string('discountReason', 500)->nullable();
            $table->string('sewingDiscountAmount', 10)->nullable();
            $table->string('sewingDiscountReason', 500)->nullable();
            $table->string('detailsCost', 10)->nullable();
            $table->string('transmissionCost', 10)->nullable();
            $table->string('fabricCost', 10)->nullable();
            $table->string('description', 10)->nullable();
            $table->enum('fabricStatus', ['REGISTERED', 'SENT'])->nullable()->default('REGISTERED');
            $table->enum('sewingStatus', ['REGISTERED', 'INSEWING', 'SENT', 'READY', 'CANCELED'])->nullable()->default('REGISTERED');
            $table->enum('fabric', ['Y', 'N'])->nullable()->default('N');
            $table->enum('dishdasha', ['Y', 'N'])->nullable()->default('N');
            $table->enum('receive', ['INPERSON', 'TRANSMISSION'])->nullable()->default('INPERSON');
            $table->enum('orderType', ['INPERSON', 'NOTINPERSON'])->nullable()->default('INPERSON');
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
