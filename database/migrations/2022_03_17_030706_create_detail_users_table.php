<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            // $table->integer('users_id')->nullable();
            $table->foreignId('users_id')->nullable()->index('fk_detail_users_to_users');
            $table->longText('photo')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('role')->nullable();
            $table->longText('biography')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('detail_users');
    }
}
