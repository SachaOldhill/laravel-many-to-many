<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 50) -> create()
        -> each(function($post){
          //vanno introdotti i post user;
          $users= User::inRandomOrder()
                      -> limit(rand(2,5))
                      -> get();
          $post -> users() -> attach($users);
          $post -> save();
        });
    }
}
