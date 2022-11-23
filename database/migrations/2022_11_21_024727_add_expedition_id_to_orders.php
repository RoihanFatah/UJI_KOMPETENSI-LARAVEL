<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpeditionIdToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // $table->decimal('shipping_charge');
            // $table->bigInteger('expedition_id');
            // $table->foreign('expedition_id')->references('id')->on('expeditions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            // $table->dropColumn('shipping_charge');
            // $table->dropColumn('expedition_id');
            $table->dropForeign('expedition_id')->references('id')->on('expeditions')->onDelete('cascade');
        });
    }
}
