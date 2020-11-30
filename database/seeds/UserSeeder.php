<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           [
               'id' => 1,
               'username' => 'admin',
               'email' => 'admin@flowelto.com',
               'userRole' => 1,
               'password' => Hash::make('admin'),
               'address' => 'DKI Jakarta',
               'gender' => 'Female',
               'DoB' => Carbon::parse('2000-01-01')
           ]
        ]);
    }
}
