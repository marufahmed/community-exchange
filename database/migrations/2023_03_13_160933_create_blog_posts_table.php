<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            
            // started adding custom fields for community exchange blog posts.
            $table->text('name');                   //name of the item
            $table->text('description');            //description of the item
            $table->text('user_id');                //user id of the author of the post
            $table->text('valuation');              //valuation of the product when new to create a reward system
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
