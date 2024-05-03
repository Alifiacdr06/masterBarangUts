<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'code' => 'ST01',
                'name' => 'Kg'
            ],
            [
                'code' => 'ST02',
                'name' => 'Ons'
                
            ],
            [
                'code' => 'ST03',
                'name' => 'Pcs'
                
            ],
        ]);
    }
}
