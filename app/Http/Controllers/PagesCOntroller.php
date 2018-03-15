<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesCOntroller extends Controller
{
    public function root()
    {
        return view('pages.root');
    }
}
