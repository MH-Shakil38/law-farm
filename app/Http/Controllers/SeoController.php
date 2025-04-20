<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function terms(){
        return view('frontend.seo.terms_condtion');
    }

    public function privacy(){
        return view('frontend.seo.privacy_policy');
    }

    public function feed(){
        return view('frontend.seo.rss_feed');
    }

    public function cookies(){
        return view('frontend.seo.cookies_policy');
    }

    public function disclaimer()
    {
        return view('frontend.seo.disclaimer');
    }

}
