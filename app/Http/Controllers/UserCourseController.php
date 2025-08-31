<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class UserCourseController extends Controller
{

    public function index(Request $request): View|Application|Factory
    {
        $cursos = $request->user()->courses()->get();

        return view('my-courses')->with('cursos', $cursos);
    }
}
