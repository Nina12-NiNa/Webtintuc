<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name'=>'Lương Lâm Ni Na' , 'email'=>'admin@gmail.com',
            'password' =>bcrypt('admin123'), 'idgroup'=> 1 ,'diachi'=>'QNgãi'
        ]);
    }
}
