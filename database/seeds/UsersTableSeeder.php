<?php

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
          0=>[
            'name'=>'Moses Gathuku',
            'email'=>'mosesgathuku95@gmail.com',
            'password'=>bcrypt('secret'),
          ],

          1=>[
            'name'=>'John Doe',
            'email'=>'johndoe@gmail.com',
            'password'=>bcrypt('secret'),
          ],

        ]);
    }
}
