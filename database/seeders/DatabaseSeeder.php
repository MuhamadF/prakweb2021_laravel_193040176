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

        User::create([
            'name' => 'Muhamad F',
            'username' => 'muhamadf',
            'email' => 'muhamad.fawazt@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Jamal',
        //     'email' => 'jamal@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'lorem ipsum dolor sit amet',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur enim quaerat molestias ut porro eius sit ipsa quo sapiente corrupti asperiores fuga dolore in voluptatem inventore, accusamus natus. Eum cumque perferendis id nemo in accusamus incidunt debitis consectetur dicta. Maiores quia itaque assumenda incidunt eum asperiores facilis ducimus enim corporis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'lorem ipsum dolor sit amet',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur enim quaerat molestias ut porro eius sit ipsa quo sapiente corrupti asperiores fuga dolore in voluptatem inventore, accusamus natus. Eum cumque perferendis id nemo in accusamus incidunt debitis consectetur dicta. Maiores quia itaque assumenda incidunt eum asperiores facilis ducimus enim corporis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'lorem ipsum dolor sit amet',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur enim quaerat molestias ut porro eius sit ipsa quo sapiente corrupti asperiores fuga dolore in voluptatem inventore, accusamus natus. Eum cumque perferendis id nemo in accusamus incidunt debitis consectetur dicta. Maiores quia itaque assumenda incidunt eum asperiores facilis ducimus enim corporis?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        Post::factory(20)->create();
    }
}
