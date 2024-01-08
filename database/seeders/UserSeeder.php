<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // // $data = [
        // //     [
        // //         'name' => 'Kasir',
        // //         'email' => 'apotek_kasir@gmail.com',
        // //         'password' => Hash::make('kasirapotek'),
        // //         'role' => 'cashier',
        // //     ],

        // // ];

        // user::insert($data);
    }
}
