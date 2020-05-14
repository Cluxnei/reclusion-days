<?php

namespace App\Http\Controllers;

use App\WorkOfArt;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Return home view
     *
     * @return Response
     */
    public function index()
    {
        App::setLocale('pt-br');
        $worksOfArts = WorkOfArt::orderByDesc('id')->get();
        return response()->view('index', compact('worksOfArts'));
    }

    public function download(string $lang)
    {
        app()->setLocale($lang);
        return redirect(Storage::url(__('images.rights')));
    }
}
