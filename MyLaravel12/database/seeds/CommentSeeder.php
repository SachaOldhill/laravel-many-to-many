<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //i commenti vanno fatti con il make() perchè hanno la chiave esterna
    public function run()
    {
        factory(Comment::class, 100) -> make()
        ->each(function($comment){

          $post = Post::inRandomOrder() -> first();
          $comment -> post() -> associate($post);
          $comment -> save();
        });
    }
}
