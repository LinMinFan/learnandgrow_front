<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Config;
use App\Traits\HasPageSetting;

class HomeController extends Controller
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

        $this->title = $this->config['site-name']['text'] . ' - 首頁';
    }

    public function index(Request $request)
    {
        $pageSetting = $this->setPageSetting($this->title);

        return view('index', compact('pageSetting'));
    }
}
