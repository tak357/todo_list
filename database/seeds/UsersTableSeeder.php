<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'name' => 'test',
            'email' => 'dummy@email.com',
            'password' => bcrypt('test1234'),   //bcrypt関数で暗号化
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
