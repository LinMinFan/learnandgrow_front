<?php

namespace App\Traits;


trait HasPageSetting
{
    /**
     * 設定基本頁面設定資料
     */
    public function setPageSetting($title = null, $description = null, $key = null, array $og = [])
    {
        $pageSetting = [];

        $pageSetting['title'] = $title;
        $pageSetting['description'] = $description;
        $pageSetting['key'] = $key;

        // 預設 og 結構避免 undefined index
        $pageSetting['og'] = array_merge([
            'title' => $title,
            'description' => $description,
            'image' => '',
        ], $og);

        return $pageSetting;
    }
}
