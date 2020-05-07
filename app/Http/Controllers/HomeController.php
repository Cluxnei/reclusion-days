<?php

namespace App\Http\Controllers;

use App\WorkOfArt;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

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
}
