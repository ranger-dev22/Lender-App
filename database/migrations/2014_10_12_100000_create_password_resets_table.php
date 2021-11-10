<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    const PASSWORD_RESETS_TABLE = 'password_resets';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::PASSWORD_RESETS_TABLE, function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::PASSWORD_RESETS_TABLE);
    }
}
