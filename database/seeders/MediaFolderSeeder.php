<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MediaFolder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MediaFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultFolders = MediaFolder::whereNull('parent_id')->get();
        $disk = Storage::disk('media');

        foreach ($defaultFolders as $folder) {
            // 建立實體資料夾（使用設定的 disk，例如 'media'）
            if (!empty($folder->path) && !$disk->exists($folder->path)) {
                $disk->makeDirectory($folder->path);
            }
        }
    }
}
