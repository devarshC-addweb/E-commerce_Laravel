<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Cotten T-Sirt',
                'price'=>'900',
                'category'=>'mobile',
                'description'=>'A Smartphone with 8GB RAM & 256GB internal Memory',
                'gallery'=>'https://content.woodlandworldwide.com/static/images/banners/researchlabs-banner.jpg'
            ]
        ]);
    }
}
