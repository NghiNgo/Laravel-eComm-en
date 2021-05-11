<?php

namespace Database\Seeders;

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
                'name' => 'Samsung Galaxy S21 5g',
                'price' => '1000',
                'description' => "A smartphone with 8GB ram and much more feature",
                'category' => 'mobile',
                'gallery' => 'https://cdn.tgdd.vn/Products/Images/42/220833/samsung-galaxy-s21-tim-600x600.jpg'
            ],
            [
                'name' => 'Macbook Pro M1 2020/16GB/1TB SSD',
                'price' => '2500',
                'description' => "A laptop with 16GB ram and much more feature",
                'category' => 'laptop',
                'gallery' => 'https://cdn.tgdd.vn/Products/Images/44/236131/Slider/apple-macbook-pro-m1-2020-z11c000cj-001-800x444.jpg'
            ],
            [
                'name' => 'Laptop Dell XPS 13 9310',
                'price' => '2900',
                'description' => "A laptop 2in1 with 16GB ram and much more feature",
                'category' => 'latop',
                'gallery' => 'https://cdn.tgdd.vn/Products/Images/44/232270/dell-xps-13-9310-i7-jgnh61-154621-024603-600x600.jpg'
            ],
            [
                'name' => 'iPad Pro 12.9 inch Wifi Cellular 128GB',
                'price' => '1500',
                'description' => "A tablet with 6GB ram and much more feature",
                'category' => 'tablet',
                'gallery' => 'https://cdn.tgdd.vn/Products/Images/522/221776/ipad-pro-12-9-inch-wifi-cellular-128gb-2020-xam-600x600-1-600x600.jpg'
            ]

        ]);
    }
}