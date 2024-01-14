<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->string('thumbnail')->nullable();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }
   public function down()
    {
        Schema::dropIfExists('posts');
    }
};
