<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
       
        $user = User::where('email', 'admin@admin.it')->first();
        if(!$user)
        {
       
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.it',
            'password' => Hash::make('password'),
        ]);
    }

    $categ = Category::where('name', 'LEGO Star Wars')->first();

        if(!$categ){

        
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }

        Article::factory(50)->create();
        
    }
}
