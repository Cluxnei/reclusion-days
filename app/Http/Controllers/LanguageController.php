<?php

namespace App\Http\Controllers;


class LanguageController extends Controller
{
    public function change(string $language)
    {
        session(compact('language'));
        return redirect()->back();
    }
}
