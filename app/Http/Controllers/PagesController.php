<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function catalog($slug)
    {
        $all = DB::select("Select * from `services` where slug = '$slug' ");
        if ($all) {
            return view('blocks.catalog', compact('all'));
        } else {
            abort(404);
        }
    }

    public function services()
    {
        return view('blocks.services');
    }

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
