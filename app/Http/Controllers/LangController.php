<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    function setLang(Request $request)
    {
        $locale = $request->language;
        Session::put('language', $locale);

        return back();
    }
}
