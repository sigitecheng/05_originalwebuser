<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Invoice_pesanan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'iqlima Nuri',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin')

        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(7)->create();


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


        Category::create([
            'nama_kategori'  => 'Fortuner',
            'slug' => 'fortuner-'

        ]);


        Category::create([
            'nama_kategori'  => 'Zoro',
            'slug' => 'zoro-'

        ]);

        Category::create([
            'nama_kategori'  => 'Lamborgini',
            'slug' => 'lamborgini--'

        ]);

        Category::create([
            'nama_kategori'  => 'Bandung',
            'slug' => 'bandung-'

        ]);

        Category::create([
            'nama_kategori'  => 'Jakarta',
            'slug' => 'jakarta-'

        ]);

        Category::create([
            'nama_kategori'  => 'Pajero',
            'slug' => 'pajero-'

        ]);


        Post::factory(125)->create();


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

        // JenisBarang::factory(1)->create();
        // Barangbarang::factory(125)->create();
        Invoice_pesanan::factory(45)->create();
    }
}
