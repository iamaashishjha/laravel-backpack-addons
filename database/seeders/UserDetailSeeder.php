<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;



class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            # code...
            DB::table('users')->insert([
                'name' => 'admin_'.$i++,
                'email' => 'admin-' . $i++ . '@gmail.com',
                'password' => Hash::make('admin12345'),
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Admin@1234'),
        ]);
    }
}
