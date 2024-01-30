<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function gallery()
    {
        return view('blocks.gallery');
    }
    public function about()
    {
        return view('blocks.about');
    }
    public function contact()
    {
        return view('blocks.contact');
    }

    public function contact_form(Request $request)
    {
        dd($request->all());
    }
}
