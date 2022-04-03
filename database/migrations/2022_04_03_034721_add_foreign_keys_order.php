<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->foreign('services_id', 'fk_orders_to_services')->references('id')
                ->on('services')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('freelancer_id', 'fk_order_freelancer_to_users')->references('id')
                ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('buyer_id', 'fk_order_buyer_to_users')->references('id')
                ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('order_status_id', 'fk_order_status_to_users')->references('id')
                ->on('order_statuses')->onUpdate('CASCADE')->onDelete('CASCADE');
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
            //
            $table->dropForeign('fk_orders_to_services');
            $table->dropForeign('fk_order_freelancer_to_users');
            $table->dropForeign('fk_order_buyer_to_users');
            $table->dropForeign('fk_order_status_to_users');
        });
    }
}
