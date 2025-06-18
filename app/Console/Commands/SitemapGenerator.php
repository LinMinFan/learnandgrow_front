<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Spatie\Sitemap\Sitemap;
use Carbon\Carbon;

class SitemapGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap daily';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        // 加入首頁
        $sitemap->add(
            Url::create(URL::to('/'))
                ->setLastModificationDate(Carbon::yesterday())
        );

        // 加入所有子分類頁面（只含啟用分類）
        $categories = Category::where('is_active', true)->whereNotNull('parent_id')->get();

        foreach ($categories as $category) {
            $sitemap->add(
                Url::create(route('post.list', ['slug' => $category->slug]))
                    ->setLastModificationDate(Carbon::yesterday())
            );
        }

        // 加入所有已發布的文章
        $articles = Article::where('status', 'published')->get();

        foreach ($articles as $article) {
            $sitemap->add(
                Url::create(route('post.show', ['id' => $article->id]))
                    ->setLastModificationDate(Carbon::yesterday())
            );
        }

        // 儲存到 public/sitemap.xml
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully using Spatie.');
    }
}
