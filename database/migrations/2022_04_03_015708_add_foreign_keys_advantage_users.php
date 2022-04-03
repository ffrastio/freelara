<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysAdvantageUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advantage_users', function (Blueprint $table) {
            //
            $table->foreign('services_id', 'fk_advantage_users_to_services')->references('id')
                ->on('services')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advantage_users', function (Blueprint $table) {
            //
            $table->dropForeign('fk_advantage_users_to_services');
        });
    }
}
