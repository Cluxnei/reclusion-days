<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksOfArtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works_of_arts', static function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('untitled');
            $table->text('description')->nullable();
            $table->string('author');
            $table->string('technique')->nullable();
            $table->foreignId('created_by');
            $table->string('photo');
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('works_of_arts', static function (Blueprint $table) {
            $table->dropForeign('created_by');
        });
        Schema::dropIfExists('works_of_arts');
    }
}
