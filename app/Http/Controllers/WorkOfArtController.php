<?php

namespace App\Http\Controllers;

use App\WorkOfArt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class WorkOfArtController extends Controller
{
    public function __construct()
    {
        $language = session()->get('language', 'en');
        App::setLocale($language);
        app()->setLocale($language);
    }
    public function show(WorkOfArt $workOfArt)
    {
        return response()->view('work-of-art', compact('workOfArt'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', 'photo');
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $photo = $request->file('photo');
            $name = uniqid(time(), false) . '.' . $photo->getClientOriginalExtension();
            $data['photo'] = $photo->storeAs('works-of-arts', $name);
        }
        $data['slug'] = Str::slug($data['title']);
        $data['created_by'] = auth()->id();
        $workOfArt = WorkOfArt::create($data);
        if ($workOfArt) {
            return response()->redirectToRoute('admin.home')->with('success', __('messages.admin.works-of-art.store.success'));
        }
        return response()->redirectToRoute('admin.home')->with('error', __('messages.admin.works-of-art.store.error'));
    }
}
