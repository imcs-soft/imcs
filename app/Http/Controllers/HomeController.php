<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $courses = Course::withCount("modules")->take(3)->get();
        $reviews = Review::withCount("user")->take(10)->get();
        return view('home')->with('courses', $courses)->with('reviews', $reviews);

        // TODO: Implement __invoke() method.
    }
}
