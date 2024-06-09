<?php

namespace App\Http\Controllers\Site;

class SiteController {
    public function contact(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('site/contact');
        // view = Helper - global function
    }
}
