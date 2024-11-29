<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class packagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'name' => 'Paket Basic',
                'terms_and_conditions' => 'Syarat dan ketentuan untuk Paket Basic',
                'price' => '500000',
                'additional_person_price' => '100000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paket Premium',
                'terms_and_conditions' => 'Syarat dan ketentuan untuk Paket Premium',
                'price' => '1000000',
                'additional_person_price' => '200000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paket Deluxe',
                'terms_and_conditions' => 'Syarat dan ketentuan untuk Paket Deluxe',
                'price' => '1500000',
                'additional_person_price' => '300000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
