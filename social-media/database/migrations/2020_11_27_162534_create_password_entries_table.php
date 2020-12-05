<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_entries', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('url')->nullable();
            $table->text('username')->nullable();
            $table->string('password')->nullable();
            $table->string('old_password')->nullable();
            $table->text('managed_by')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('password_entries');
    }
}
