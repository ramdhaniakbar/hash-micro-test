<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MenuDishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'name' => 'Spaghetti Carbonara',
                'type' => 'Main Course',
                'stars' => 3,
                'image' => 'image/dishes/bg-img-1.jpg',
            ],
            [
                'name' => 'Caesar Salad',
                'type' => 'Appetizer',
                'stars' => 4,
                'image' => 'image/dishes/bg-img-2.jpg',
            ],
            [
                'name' => 'Chocolate Lava Cake',
                'type' => 'Dessert',
                'stars' => 2,
                'image' => 'image/dishes/bg-img-3.jpg',
            ],
            [
                'name' => 'Margherita Pizza',
                'type' => 'Main Course',
                'stars' => 4,
                'image' => 'image/dishes/bg-img-4.jpg',
            ],
            [
                'name' => 'Mango Smoothie',
                'type' => 'Beverage',
                'stars' => 5,
                'image' => 'image/dishes/bg-img-5.jpg',
            ],
            [
                'name' => 'Grilled Salmon',
                'type' => 'Main Course',
                'stars' => 5,
                'image' => 'image/dishes/bg-img-6.jpg',
            ],
            [
                'name' => 'French Onion Soup',
                'type' => 'Appetizer',
                'stars' => 3,
                'image' => 'image/dishes/bg-img-7.jpg',
            ],
            [
                'name' => 'Tiramisu',
                'type' => 'Dessert',
                'stars' => 4,
                'image' => 'image/dishes/bg-img-8.jpg',
            ],
            [
                'name' => 'Lemonade',
                'type' => 'Beverage',
                'stars' => 4,
                'image' => 'image/dishes/bg-img-9.jpg',
            ]
        ];

        foreach ($dishes as $dish) {
            // copy the image file to the public directory
            $sourcePath = public_path('assets/' . $dish['image']); 
            $randomFileName = Str::random(10) . '.' . pathinfo($dish['image'], PATHINFO_EXTENSION);
            $storagePath = 'images/dishes';
            
            if (file_exists($sourcePath)) {
                // store the image in the specified path with the random file name
                Storage::disk('public')->putFileAs($storagePath, new \Illuminate\Http\File($sourcePath), $randomFileName);
            }

            // save to the database
            DB::table('menu_dishes')->insert([
                'name' => $dish['name'],
                'type' => $dish['type'],
                'stars' => $dish['stars'],
                'image' => $randomFileName,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
