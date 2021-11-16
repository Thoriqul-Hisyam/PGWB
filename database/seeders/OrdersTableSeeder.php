<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'invoice'=> 'Rp25000',
                'customer_id'=> '1',
                'user_id'=> 1,
                'total'=> '12',
                'created_at'=>new \DateTime,
                 'update_at'=> null,
            ],
            [
                'invoice'=>'Rp15000',
                'customer_id'=>'2',
                'user_id'=>2,
                'total'=>'2',
                'created_at'=>new \DateTime,
                 'update_at'=> null,
            ],
        ];
        \DB::table('orders')->insert($orders);
    }
}
