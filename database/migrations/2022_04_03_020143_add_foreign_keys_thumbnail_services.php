<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysThumbnailServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thumbnail_services', function (Blueprint $table) {
            //
            $table->foreign('services_id', 'fk_thumbnail_to_services')->references('id')
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
        Schema::table('thumbnail_services', function (Blueprint $table) {
            //
            $table->dropForeign('fk_thumbnail_to_services');
        });
    }
}
