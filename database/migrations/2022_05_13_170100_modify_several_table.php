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
        Schema::dropIfExists('articles_categories');
        Schema::dropIfExists('articles_users');
        Schema::dropIfExists('articles_commentaries_users');
        Schema::table('blog_articles', function (Blueprint $table){
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('blog_categories')->onDelete('cascade');
        });
        Schema::table('blog_commentaries', function (Blueprint $table){
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('article_id')->constrained('blog_articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('articles_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('blog_articles')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('blog_categories')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('articles_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('blog_articles')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('articles_commentaries_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('blog_articles')->onDelete('cascade');
            $table->foreignId('comment_id')->constrained('blog_commentaries')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('blog_articles', function (Blueprint $table){
            $table->dropForeign('blog_articles_user_id_foreign');
            $table->dropForeign('blog_articles_category_id_foreign');
            $table->dropColumn(['user_id', 'category_id']);
        });
        Schema::table('blog_commentaries', function (Blueprint $table){
            $table->dropForeign('blog_commentaries_user_id_foreign');
            $table->dropForeign('blog_commentaries_article_id_foreign');
            $table->dropColumn(['user_id', 'article_id']);
        });
    }
};
