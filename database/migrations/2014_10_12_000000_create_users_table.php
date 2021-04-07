<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 20);
            $table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 200);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address', 200);
            $table->string('zip_code', 10);
            $table->string('city', 190);
            $table->string('province', 90);
            $table->string('country', 90);
            $table->ipAddress('last_ip')->default('0.0.0.0');
            $table->integer('acl')->unsigned()->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
