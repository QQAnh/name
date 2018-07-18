<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'=>1,
                'title'=>'Smart Phone',
                'image_url'=>'http://www.androidguys.com/wp-content/uploads/2017/08/Geekbuying-sale.png',

            ],[
                'id'=>2,
                'title'=>'LAPTOP',
                'image_url'=>'https://www.earticleblog.com/wp-content/uploads/2017/10/Best-offers-on-Laptop.jpg',

            ],[
                'id'=>3,
                'title'=>'PC',
                'image_url'=>'https://zoutons.com/assets/images/originals/blog/Untitled-1_1504272715.jpg',

            ],[
                'id'=>4,
                'title'=>'Game Consoles & Accessories',
                'image_url'=>'https://slickdeals.net/blog/wp-content/uploads/2017/11/best-black-friday-videogames-hero-revised.png',

            ],
        ]);
    }
}
