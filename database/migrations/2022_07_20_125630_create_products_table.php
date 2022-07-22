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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title_product');
            $table->string('code_product');
            $table->integer('price');
            $table->integer('stock');
            $table->integer('jumlah_terjual')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products', function (Blueprint $table){
            $table->dropForeign('lists_user_id_foreign');
            $table->dropIndex('lists_user_id_index');
            $table->dropColumn('user_id');

        });
    }
};
