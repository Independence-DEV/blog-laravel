<?php

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
        // $this->call(UsersTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        //$this->call(PostsTableSeeder::class);

        factory(App\Category::class, 5)->create()->each(function ($category) {
            $i = rand(2, 8);
            while (--$i) {
                $category->posts()->save(factory(App\Post::class)->make());
            }
        });
    }
}
