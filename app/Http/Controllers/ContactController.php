<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Config;
use App\Traits\HasPageSetting;

class ContactController extends Controller
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

        $this->listTitle = $this->config['site-name']['text'] . ' - 與我聯絡';
    }

    public function index(Request $request)
    {
        $pageSetting = $this->setPageSetting($this->title, null, null);

        return view('pages.contact.index', compact('pageSetting'));
    }
}
