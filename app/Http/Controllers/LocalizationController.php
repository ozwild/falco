<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index($locale){
        if(in_array($locale,['en','es'])){
            \App::setLocale($locale);
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
