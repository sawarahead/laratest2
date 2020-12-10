<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('post_id')->comment('記事ID');
            $table->string('name',255)->comment('名前');
            $table->string('body')->comment('本文');
            $table->softDeletes();
            $table->index(['post_id']);
        });
        
    }
}
