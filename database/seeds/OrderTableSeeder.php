<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['UserId'=>1,'orderDetailsId' => 2, 'nameBuyes'=>'Anh Huy1','nameReceiver'=>'Khánh Trắng1',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0123456789',
                'phoneReceiver'=>'012345687','note'=>'Giao Gap'],

            ['UserId'=>2,'orderDetailsId' => 6,'nameBuyes'=>'Anh Huy2','nameReceiver'=>'Khánh Trắng2',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0125211789',
                'phoneReceiver'=>'012777687','note'=>'Giao Gap'],

            ['UserId'=>4,'orderDetailsId' => 3,'nameBuyes'=>'Anh Huy3','nameReceiver'=>'Khánh Trắng3',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'012222789',
                'phoneReceiver'=>'017777777','note'=>'Giao Gap'],

            ['UserId'=>3,'orderDetailsId' => 4,'nameBuyes'=>'Anh Huy4','nameReceiver'=>'Khánh Trắng4',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0145741189',
                'phoneReceiver'=>'014541487','note'=>'Giao Gap'],

            ['UserId'=>5,'orderDetailsId' => 5,'nameBuyes'=>'Anh Huy5','nameReceiver'=>'Khánh Trắng5',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0722256789',
                'phoneReceiver'=>'0421525687','note'=>'Giao Gap'],

            ['UserId'=>6,'orderDetailsId' => 7,'nameBuyes'=>'Anh Huy6','nameReceiver'=>'Khánh Trắng6',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0124242489',
                'phoneReceiver'=>'09685687','note'=>'Giao Gap'],
            ['UserId'=>7,'orderDetailsId' => 8,'nameBuyes'=>'Anh Huy6','nameReceiver'=>'Khánh Trắng6',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0124242489',
                'phoneReceiver'=>'09685687','note'=>'Giao Gap'],
        ]);
    }
}
