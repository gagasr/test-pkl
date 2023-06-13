<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Gagas Prakoso',
        //     'email' => 'gagasprakoso@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident commodi fugiat quae molestias nihil impedit quisquam officiis dicta laudantium perferendis, nemo quia aperiam, enim blanditiis iure voluptatibus vel nam aliquam quod! Voluptates aspernatur aperiam qui exercitationem ullam. Labore officia nihil, facilis illo asperiores in excepturi earum! Fuga dignissimos autem beatae laborum tempora, animi perspiciatis obcaecati repellat vitae voluptas ullam, maiores magnam? Nostrum, quaerat iste ratione animi fugiat possimus nihil, dicta officiis quas in quos saepe, optio dolores laboriosam sequi veritatis? Nostrum harum nesciunt dicta esse itaque, quae id optio commodi, cumque, tempore rem saepe aliquam quis illum porro hic.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident commodi fugiat quae molestias nihil impedit quisquam officiis dicta laudantium perferendis, nemo quia aperiam, enim blanditiis iure voluptatibus vel nam aliquam quod! Voluptates aspernatur aperiam qui exercitationem ullam. Labore officia nihil, facilis illo asperiores in excepturi earum! Fuga dignissimos autem beatae laborum tempora, animi perspiciatis obcaecati repellat vitae voluptas ullam, maiores magnam? Nostrum, quaerat iste ratione animi fugiat possimus nihil, dicta officiis quas in quos saepe, optio dolores laboriosam sequi veritatis? Nostrum harum nesciunt dicta esse itaque, quae id optio commodi, cumque, tempore rem saepe aliquam quis illum porro hic.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident commodi fugiat quae molestias nihil impedit quisquam officiis dicta laudantium perferendis, nemo quia aperiam, enim blanditiis iure voluptatibus vel nam aliquam quod! Voluptates aspernatur aperiam qui exercitationem ullam. Labore officia nihil, facilis illo asperiores in excepturi earum! Fuga dignissimos autem beatae laborum tempora, animi perspiciatis obcaecati repellat vitae voluptas ullam, maiores magnam? Nostrum, quaerat iste ratione animi fugiat possimus nihil, dicta officiis quas in quos saepe, optio dolores laboriosam sequi veritatis? Nostrum harum nesciunt dicta esse itaque, quae id optio commodi, cumque, tempore rem saepe aliquam quis illum porro hic.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident commodi fugiat quae molestias nihil impedit quisquam officiis dicta laudantium perferendis, nemo quia aperiam, enim blanditiis iure voluptatibus vel nam aliquam quod! Voluptates aspernatur aperiam qui exercitationem ullam. Labore officia nihil, facilis illo asperiores in excepturi earum! Fuga dignissimos autem beatae laborum tempora, animi perspiciatis obcaecati repellat vitae voluptas ullam, maiores magnam? Nostrum, quaerat iste ratione animi fugiat possimus nihil, dicta officiis quas in quos saepe, optio dolores laboriosam sequi veritatis? Nostrum harum nesciunt dicta esse itaque, quae id optio commodi, cumque, tempore rem saepe aliquam quis illum porro hic.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }

    /**
     */
    public function __construct()
    {
    }
}