<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name'  => 'Sigit Septiadi',
        //     'email' => 'sigitseptiadi1@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name'  => 'Iqlima Nur Izzati',
        //     'email' => 'iqlimanurizzati@gmail.com',
        //     'password' => bcrypt('54321')

        // ]);

        // User::create([
        //     'name'  => 'Utari Nur Amalia',
        //     'email' => 'utarinuramalia@gmail.com',
        //     'password' => bcrypt('112233')

        // ]);

        // User::create([
        //     'name'  => 'Permata Sari',
        //     'email' => 'permatasari@gmail.com',
        //     'password' => bcrypt('49564546')

        // ]);

        // User::create([
        //     'name'  => 'Izzati Nur Iqlima',
        //     'email' => 'izzatinuriqlima@gmail.com',
        //     'password' => bcrypt('16115616')

        // ]);
        User::factory(7)->create();

        Category::create([
            'nama_kategori'  => 'Web Programming',
            'slug' => 'web-programming'

        ]);


        Category::create([
            'nama_kategori'  => 'Personal',
            'slug' => 'web-personal'

        ]);

        Category::create([
            'nama_kategori'  => 'Web Gaming',
            'slug' => 'Pemograman Game'

        ]);

        Category::create([
            'nama_kategori'  => 'Internet if Things',
            'slug' => 'internet-of-things'

        ]);



        Post::factory(15)->create();


        // Post::create([
        //     'title'  => 'Judul Pertama', 
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'dsfgdfug dfgibndfigudf dfgindfgidnf dfgdhfug dfig dfgidfgi',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus alias fuga, itaque mollitia exercitationem esse dolorem! Sed nemo ullam dignissimos praesentium, distinctio dolor nobis perferendis quo inventore omnis enim officia amet deleniti facilis sapiente quasi commodi repellat architecto at illum eos a ut non eveniet. Eos quasi beatae facere exercitationem voluptatibus est, ducimus corrupti illo quos tenetur iure explicabo amet obcaecati tempora laudantium enim vero odio animi? Iure aliquid velit at delectus fuga. Eius repudiandae, voluptas voluptatem odio cumque beatae! Illo quos unde earum sit? Expedita, nihil officiis? Fuga, corporis odit nobis doloremque debitis sit suscipit asperiores! Et, recusandae, dicta fuga eum exercitationem eveniet consectetur repellat asperiores sequi obcaecati repudiandae cumque quod maxime commodi, quaerat nostrum qui velit rerum dolores praesentium fugiat. Distinctio quo molestiae soluta, aspernatur eum cumque corrupti odio saepe debitis illum. Quasi voluptate amet in ab, numquam assumenda dolore maxime illo est, ullam id. Ratione, fugit! Explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sed tempora ab dignissimos, vel tempore.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title'  => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'dsfgdfug dfgibndfigudf dfgindfgidnf dfgdhfug dfig dfgidfgi',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus alias fuga, itaque mollitia exercitationem esse dolorem! Sed nemo ullam dignissimos praesentium, distinctio dolor nobis perferendis quo inventore omnis enim officia amet deleniti facilis sapiente quasi commodi repellat architecto at illum eos a ut non eveniet. Eos quasi beatae facere exercitationem voluptatibus est, ducimus corrupti illo quos tenetur iure explicabo amet obcaecati tempora laudantium enim vero odio animi? Iure aliquid velit at delectus fuga. Eius repudiandae, voluptas voluptatem odio cumque beatae! Illo quos unde earum sit? Expedita, nihil officiis? Fuga, corporis odit nobis doloremque debitis sit suscipit asperiores! Et, recusandae, dicta fuga eum exercitationem eveniet consectetur repellat asperiores sequi obcaecati repudiandae cumque quod maxime commodi, quaerat nostrum qui velit rerum dolores praesentium fugiat. Distinctio quo molestiae soluta, aspernatur eum cumque corrupti odio saepe debitis illum. Quasi voluptate amet in ab, numquam assumenda dolore maxime illo est, ullam id. Ratione, fugit! Explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sed tempora ab dignissimos, vel tempore.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


        // Post::create([
        //     'title'  => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'dsfgdfug dfgibndfigudf dfgindfgidnf dfgdhfug dfig dfgidfgi',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus alias fuga, itaque mollitia exercitationem esse dolorem! Sed nemo ullam dignissimos praesentium, distinctio dolor nobis perferendis quo inventore omnis enim officia amet deleniti facilis sapiente quasi commodi repellat architecto at illum eos a ut non eveniet. Eos quasi beatae facere exercitationem voluptatibus est, ducimus corrupti illo quos tenetur iure explicabo amet obcaecati tempora laudantium enim vero odio animi? Iure aliquid velit at delectus fuga. Eius repudiandae, voluptas voluptatem odio cumque beatae! Illo quos unde earum sit? Expedita, nihil officiis? Fuga, corporis odit nobis doloremque debitis sit suscipit asperiores! Et, recusandae, dicta fuga eum exercitationem eveniet consectetur repellat asperiores sequi obcaecati repudiandae cumque quod maxime commodi, quaerat nostrum qui velit rerum dolores praesentium fugiat. Distinctio quo molestiae soluta, aspernatur eum cumque corrupti odio saepe debitis illum. Quasi voluptate amet in ab, numquam assumenda dolore maxime illo est, ullam id. Ratione, fugit! Explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sed tempora ab dignissimos, vel tempore.</p>',
        //     'category_id' => 1,
        //     'user_id' => 3
        // ]);


        // Post::create([
        //     'title'  => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'dsfgdfug dfgibndfigudf dfgindfgidnf dfgdhfug dfig dfgidfgi',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus alias fuga, itaque mollitia exercitationem esse dolorem! Sed nemo ullam dignissimos praesentium, distinctio dolor nobis perferendis quo inventore omnis enim officia amet deleniti facilis sapiente quasi commodi repellat architecto at illum eos a ut non eveniet. Eos quasi beatae facere exercitationem voluptatibus est, ducimus corrupti illo quos tenetur iure explicabo amet obcaecati tempora laudantium enim vero odio animi? Iure aliquid velit at delectus fuga. Eius repudiandae, voluptas voluptatem odio cumque beatae! Illo quos unde earum sit? Expedita, nihil officiis? Fuga, corporis odit nobis doloremque debitis sit suscipit asperiores! Et, recusandae, dicta fuga eum exercitationem eveniet consectetur repellat asperiores sequi obcaecati repudiandae cumque quod maxime commodi, quaerat nostrum qui velit rerum dolores praesentium fugiat. Distinctio quo molestiae soluta, aspernatur eum cumque corrupti odio saepe debitis illum. Quasi voluptate amet in ab, numquam assumenda dolore maxime illo est, ullam id. Ratione, fugit! Explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sed tempora ab dignissimos, vel tempore.</p>',
        //     'category_id' => 2,
        //     'user_id' => 4
        // ]);


        // Post::create([
        //     'title'  => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'dsfgdfug dfgibndfigudf dfgindfgidnf dfgdhfug dfig dfgidfgi',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus alias fuga, itaque mollitia exercitationem esse dolorem! Sed nemo ullam dignissimos praesentium, distinctio dolor nobis perferendis quo inventore omnis enim officia amet deleniti facilis sapiente quasi commodi repellat architecto at illum eos a ut non eveniet. Eos quasi beatae facere exercitationem voluptatibus est, ducimus corrupti illo quos tenetur iure explicabo amet obcaecati tempora laudantium enim vero odio animi? Iure aliquid velit at delectus fuga. Eius repudiandae, voluptas voluptatem odio cumque beatae! Illo quos unde earum sit? Expedita, nihil officiis? Fuga, corporis odit nobis doloremque debitis sit suscipit asperiores! Et, recusandae, dicta fuga eum exercitationem eveniet consectetur repellat asperiores sequi obcaecati repudiandae cumque quod maxime commodi, quaerat nostrum qui velit rerum dolores praesentium fugiat. Distinctio quo molestiae soluta, aspernatur eum cumque corrupti odio saepe debitis illum. Quasi voluptate amet in ab, numquam assumenda dolore maxime illo est, ullam id. Ratione, fugit! Explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sed tempora ab dignissimos, vel tempore.</p>',
        //     'category_id' => 1,
        //     'user_id' => 6
        // ]);
    }
}
