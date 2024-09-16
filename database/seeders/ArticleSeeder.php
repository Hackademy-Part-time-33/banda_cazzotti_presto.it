<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath= base_path('database/images.json');
        $json=file_get_contents($jsonPath);
        $articles= json_decode($json,true);

        
        foreach($articles as $article){
            Article::create([
                'title' => $article['title'],
            'description' => $article['description'],
            'price' =>  $article['price'],
            'category_id' =>  $article['category_id'],
            'user_id' =>  $article['user_id'],
            'is_accepted'=> $article['is_accepted'],
            ]);
        
    }
}
}