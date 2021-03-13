<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transactions_id')->nullable();
            $table->foreign('transactions_id')->references('id')->on('transactions')->onDelete('set null');
            $table->unsignedBigInteger('books_id')->nullable();
            $table->foreign('books_id')->references('id')->on('books')->onDelete('set null');
            $table->string('books_name');
            $table->integer('books_price');
            $table->string('quantity');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
