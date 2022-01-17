<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Calviano',
        //     'email' => 'calvianoid@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Nathan',
        //     'email' => 'nathanid@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolorem tempore eius, dolore officia, natus nulla deserunt nobis ad unde nostrum voluptate assumenda obcaecati sit. Tempora possimus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolorem tempore eius, dolore officia, natus nulla deserunt nobis ad unde nostrum voluptate assumenda obcaecati sit. Tempora possimus, est officiis suscipit non optio necessitatibus distinctio cumque cupiditate eaque a inventore itaque ipsa quod ea nulla? Officia tempore porro maxime, aliquid, a ipsam deserunt veritatis voluptatibus error vel voluptatem pariatur molestias laboriosam dolorem! Delectus beatae nulla voluptatum a illum incidunt aspernatur officia ipsam harum. Fugit suscipit reprehenderit eius alias voluptatum odio, qui, sequi nemo enim natus necessitatibus optio animi! Necessitatibus quibusdam iure alias soluta distinctio ducimus earum officiis? Nemo voluptatibus quibusdam autem!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        
    }
}
