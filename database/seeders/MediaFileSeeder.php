<?php

namespace Database\Seeders;

use App\Models\MediaFile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MediaFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\MediaFile::factory(20)->create();
        Storage::deleteDirectory('public/mediafile');

        foreach (MediaFile::all() as $mediaFile) {
            Storage::makeDirectory('public/mediafile/' . $mediaFile->id);
            $image =  fake()->image(storage_path('app/public/mediafile/' . $mediaFile->id), rand(1280, 640), 720, null, false);
            $mediaFile->update([
                'file_name' => $image
            ]);
        }
    }
}
