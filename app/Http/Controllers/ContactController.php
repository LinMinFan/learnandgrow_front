<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Config;
use App\Models\ContactForm;
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
        $pageSetting = $this->setPageSetting($this->title);

        return view('pages.contact.index', compact('pageSetting'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        ContactForm::create($validated);

        return back()->with('success', '您的訊息已成功送出，我們將儘快與您聯繫！');
    }
}
