<?php

namespace Database\Seeders;
use App\Models\Category;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'LEGO Star Wars',
        'LEGO Lord Of Rings',
        'LEGO City',
        'LEGO Batman',
        'LEGO Medieval',
        'LEGO Technic',
        'LEGO Architecture',
        'LEGO Castle',
        'LEGO Creator',
        'LEGO Minecraft',
    ];

    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
