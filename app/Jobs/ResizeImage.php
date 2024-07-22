<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Enums\CropPosition;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\Unit;
use Spatie\Image\Image;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w,$h, $fileName, $path;

    public function __construct($filePath,$w,$h )
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;
        

        Image::load($srcPath)
        ->fit(Fit::Crop, $w,$h)
        ->watermark(
            base_path('resources/img/watermark.png'),
            width: 50,
            height: 50,
            paddingX: 5,
            paddingY: 5,
            paddingUnit: Unit:: Percent
        )
        // // ->width($w)
        // // ->height($h)
        // // ->crop($w, $h, CropPosition::Center)
        // ->save($destPath);
        // ->crop($w, $h, CropPosition::Center)
        ->save($destPath);
    }
}
