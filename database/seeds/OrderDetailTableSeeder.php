<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            ['productId'=>2,'quantity'=>1,'totalMoney'=>20000],
            ['productId'=>5,'quantity'=>1,'totalMoney'=>30000],
            ['productId'=>8,'quantity'=>1,'totalMoney'=>25000],
            ['productId'=>16,'quantity'=>1,'totalMoney'=>40000],
            ['productId'=>7,'quantity'=>1,'totalMoney'=>50000],
            ['productId'=>8,'quantity'=>1,'totalMoney'=>100000],
            ['productId'=>10,'quantity'=>1,'totalMoney'=>70000],
            ['productId'=>18,'quantity'=>1,'totalMoney'=>80000],

        ]);

//        DB::table('order_details')->insert([
//            ['orderId'=>2,'productId'=>2,'quantity'=>1],
//            ['orderId'=>12,'productId'=>62,'quantity'=>1],
//            ['orderId'=>32,'productId'=>82,'quantity'=>1],
//            ['orderId'=>42,'productId'=>162,'quantity'=>1],
//            ['orderId'=>52,'productId'=>82,'quantity'=>1],
//        ]);
    }
}
