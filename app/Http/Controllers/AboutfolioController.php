<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use App\Models\Config;
use App\Traits\HasPageSetting;

use Illuminate\Http\Request;

class AboutfolioController extends Controller
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

        $this->title = $this->config['site-name']['text'] . ' - 關於我';
    }

    public function about(Request $request)
    {
        $pageSetting = $this->setPageSetting($this->title, null, null);

        return view('pages.about', compact('pageSetting'));
    }
}
