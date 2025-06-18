<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Config;
use App\Traits\HasPageSetting;

class PortfolioController extends Controller
{
    use HasPageSetting;

    protected $config;
    protected $listTitle;
    protected $title;

    public function __construct()
    {
        if (Cache::has('config_settings')) {
            $this->config = Cache::get('config_settings');
        } else {
            $this->config = Config::all()->pluck('value', 'key');
        }

        $this->listTitle = $this->config['site-name']['text'] . ' - 作品集';
    }

    public function portfolioList(Request $request)
    {
        $pageSetting = $this->setPageSetting($this->listTitle);

        return view('pages.portfolio.list', compact('pageSetting'));
    }

    public function portfolioShow(Request $request, $name)
    {
        $this->title = $this->config['site-name']['text'] . ' - ' . $name;
        $pageSetting = $this->setPageSetting($this->title);

        return view('pages.portfolio.' . $name, compact(['pageSetting', 'name']));
    }
}
