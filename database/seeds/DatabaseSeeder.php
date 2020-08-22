<?php

use App\Tweet;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class, 10)->create();
        factory(Tweet::class, 5)->create();
        // factory(Subject::class, 5)->create();
        // factory(Grade::class, 5)->create();
        // factory(Question::class, 10)->create();
        // factory(Reply::class, 50)->create()->each(function ($reply) {
        //     return $reply->likes()->save(factory(Like::class)->make());
        // });

    }
}
