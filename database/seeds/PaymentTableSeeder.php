<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
          'created_at'=>Carbon::now(),
        ],
        1=>[
          'user_id'=>1,
          'type'=> 'mpesa',
          'amount'=>490,
          'created_at'=>Carbon::now(),
        ],
        2=>[
          'user_id'=>1,
          'type'=> 'mpesa',
          'amount'=>600,
          'created_at'=>Carbon::now(),
        ],
        3=>[
          'user_id'=>1,
          'type'=> 'mpesa',
          'amount'=>1000,
          'created_at'=>Carbon::now(),
        ],
        ]);
    }
}
