<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::with('Visi','Misi','Motto')->get();
        return view('admin.about.index', ['about' => $about]);
    }
    public function tentangkami()
    {
        $about = About::with('Visi','Misi','Motto')->get();
        return view('front.pages.tentang-kami', ['about' => $about]);
    }
    public function create()
    {

        return view('admin.about.create');
    }
}
