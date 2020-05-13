<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    public function index()
    {
        return response()->view('admin.home');
    }
}
