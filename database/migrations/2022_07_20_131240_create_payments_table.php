<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('total_bayar');
            $table->unsignedBigInteger('transaction_id');
            $table->text('keterangan');
            $table->timestamps();
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments', function(Blueprint $table){
            $table->dropForeign('list_transaction_id_foreign');
            $table->dropIndex('lists_transaction_id_index');
            $table->dropColumn('transaction_id');
        });
    }
};
