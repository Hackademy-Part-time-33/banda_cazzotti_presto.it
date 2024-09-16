<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath= base_path('database/products.json');
        $json=file_get_contents($jsonPath);
        $articles= json_decode($json,true);
        foreach($articles as $article){
            Article::create([
                
    "path"=>$article['title'],
    "article_id"=> $article['article_id'],
        "labels"=> $article['labels'],
    "adult"=> $article['adult'],
    "spoof"=> $article['spoof'],
    "medical"=> $article['medical'],
    "violence"=> $article['violence'],
    "racy"=> $article['racy'],
            ]);
        }
        }
    }

