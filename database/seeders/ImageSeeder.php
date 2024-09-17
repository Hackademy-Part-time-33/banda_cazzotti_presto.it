<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath= base_path('database/images.json');
        $json=file_get_contents($jsonPath);
        $images= json_decode($json,true);

        foreach($images as $article){
            Image::create([
                
    "path"=>$article['path'],
    "article_id"=> $article['article_id'],
        "labels"=> $article['labels'],
    "adult"=> $images[63]['adult'],
    "spoof"=> $images[63]['spoof'],
    "medical"=> $images[63]['medical'],
    "violence"=> $images[63]['violence'],
    "racy"=> $images[63]['racy'],
            ]);
        }
        }
    }

