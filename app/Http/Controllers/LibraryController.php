<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class LibraryController extends Controller
{

    public function index(): View|Application|Factory
    {
        $recursos = Resource::all();
        return view('library')->with('recursos', $recursos);
    }
}
