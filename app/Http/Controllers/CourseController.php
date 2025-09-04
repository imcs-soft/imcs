<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $presencial = Course::withCount("modules")
            ->where("modality", "=", "presencial")
            ->paginate(3, ["*"], "presencial");

        $online = Course::withCount("modules")
            ->where("modality", "=", "online")
            ->paginate(3, ["*"], "online");

        return view("courses", ["presencial" => $presencial, "online" => $online]);
    }
}
