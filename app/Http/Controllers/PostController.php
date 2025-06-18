<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Config;
use App\Models\Category;
use App\Models\Article;
use App\Traits\HasPageSetting;

class PostController extends Controller
{
    use HasPageSetting;

    protected $config;
    protected $title;

    public function __construct()
    {
        if (Cache::has('config_settings')) {
            $this->config = Cache::get('config_settings');
        } else {
            $this->config = Config::all()->pluck('value', 'key');
        }
    }

    public function portfolioList(Request $request, $slug = 'frontend')
    {
        // 取得所有主分類及其子分類（供左側選單使用）
        $categories = Category::with(['children' => function ($query) {
            $query->where('is_active', true)->orderBy('sort_order');
        }])->whereNull('parent_id')->where('is_active', true)->orderBy('sort_order')->get();

        // 取得目前所選子分類
        $currentCategory = Category::where('slug', $slug)
            ->whereNotNull('parent_id')
            ->firstOrFail();

        // 取得該子分類下的文章（可加分頁）
        $posts = $currentCategory->articles()->where('status', 'published')->latest('published_at')->paginate(10);

        $name = $currentCategory->name;
        $this->title = $this->config['site-name']['text'] . ' - ' . $name;
        $pageSetting = $this->setPageSetting($this->title);

        return view('pages.post.post-list', compact('categories', 'currentCategory', 'posts', 'name', 'pageSetting'));
    }

    public function postShow(Request $request, $id)
    {
        $post = Article::with('category')->find($id);
        $name = $post->title;

        $this->title = $this->config['site-name']['text'] . ' - ' . $name;
        $pageSetting = $this->setPageSetting($this->title);

        return view('pages.post.post', compact('post', 'name', 'pageSetting'));
    }
}
