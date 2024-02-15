<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('original_title');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->text('summary');
            $table->string('keywords')->nullable();;
            $table->char('isbn')->unique();
            $table->string('slug')->unique();
            $table->string('editor')->nullable();
            $table->string('translator')->nullable();
            $table->string('print')->nullable();
            $table->integer('pages')->unsigned();
            $table->string('cover')->nullable();
            $table->integer('year_id')->unsigned();
            $table->foreign('year_id')->references('id')->on('years');
            $table->integer('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')->references('id')->on('publishers');
            $table->integer('form_id')->unsigned();
            $table->foreign('form_id')->references('id')->on('forms');
            $table->integer('format_id')->unsigned();
            $table->foreign('format_id')->references('id')->on('formats');
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            $table->integer('origin_id')->unsigned();
            $table->foreign('origin_id')->references('id')->on('origins');
            $table->integer('period_id')->unsigned();
            $table->foreign('period_id')->references('id')->on('periods');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

        });


}
// $keywords

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
