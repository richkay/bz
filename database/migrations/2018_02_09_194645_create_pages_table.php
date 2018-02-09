<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',100)->unique();
            $table->integer('parent_id')->nullable();
            $table->string('title');
            $table->string('description');
            $table->text('content');
            $table->string('seo_key');
            $table->string('seo_desc');
            $table->boolean('isactive');
            $table->boolean('hassidebar')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
