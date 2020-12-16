<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
           ],
            [
                'id' => 2,
                'username' => 'ardie',
                'email' => 'ardie@flowelto.com',
                'userRole' => 2,
                'password' => Hash::make('ardie'),
                'address' => 'Kota Bogor',
                'gender' => 'Male',
                'DoB' => Carbon::parse('2001-01-10')
            ]
        ]);
    }
}
