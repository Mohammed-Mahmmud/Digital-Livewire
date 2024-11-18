<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index($slug = null)
    {
        if (isset($slug)) {
            try {
                return view('front.pages.' . $slug);
            } catch (\Throwable $th) {
                return view('front.pages.404');
            }
        } else {
            try {
                return view('front.pages.index');
            } catch (\Throwable $th) {
                return view('front.pages.404');
            }
        }
    }
}
