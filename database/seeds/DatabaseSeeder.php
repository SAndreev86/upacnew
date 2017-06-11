<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test/test.jpg',
            'filter' => 'test',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test2/test2.png',
            'filter' => 'test2',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);





        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test/test.jpg',
            'filter' => 'test',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test2/test2.png',
            'filter' => 'test2',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);



        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test/test.jpg',
            'filter' => 'test',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test2/test2.png',
            'filter' => 'test2',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);



        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test/test.jpg',
            'filter' => 'test',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test2/test2.png',
            'filter' => 'test2',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);



        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test/test.jpg',
            'filter' => 'test',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test2/test2.png',
            'filter' => 'test2',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);



        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test/test.jpg',
            'filter' => 'test',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test2/test2.png',
            'filter' => 'test2',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);



        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test/test.jpg',
            'filter' => 'test',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('goods')->insert([
            'name' => str_random(10),
            'description' => str_random(100),
            'images' => 'images/goods/test2/test2.png',
            'filter' => 'test2',

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }

}
