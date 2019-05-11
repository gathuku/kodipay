<?php

use Illuminate\Database\Seeder;


class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->delete();
        DB::table('payments')->insert([
        0=>[
          'user_id'=>1,
          'type'=> 'mpesa',
          'amount'=>100,
        ],
        1=>[
          'user_id'=>1,
          'type'=> 'mpesa',
          'amount'=>490,
        ],
        2=>[
          'user_id'=>1,
          'type'=> 'mpesa',
          'amount'=>600,
        ],
        3=>[
          'user_id'=>1,
          'type'=> 'mpesa',
          'amount'=>1000,
        ],
        ]);
    }
}
