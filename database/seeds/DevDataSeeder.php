<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;

class DevDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers();
        $this->createPosts();
    }

    private function createUsers()
    {
		Schema::disableForeignKeyConstraints();
    	\App\User::truncate();
		Schema::enableForeignKeyConstraints();
    	factory(\App\User::class, 100)->create();
    }

    private function createPosts()
    {
    	\App\User::get()->each(function($user) {
    		factory(\App\Models\Post::class, 100)->create([
    			'user_id' => $user->id,
    		]);
    	});
    }
}
