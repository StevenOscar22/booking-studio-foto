<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'), // Password yang di-hash
                'phone' => '081234567890',
                'picture' => 'path/to/admin/picture.jpg', // Ganti dengan path yang sesuai
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Client',
                'email' => 'client@example.com',
                'password' => Hash::make('client123'), // Password yang di-hash
                'phone' => '081234567891',
                'picture' => 'path/to/client/picture.jpg', // Ganti dengan path yang sesuai
                'role' => 'client',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
