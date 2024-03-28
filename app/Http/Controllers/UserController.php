<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Instructor;

class UserController extends Controller
{

    public function UserIndex(){
        return view('layouts.index');
    }  // end method

    public function LayoutsCourse(){
        $courses = Course::all();
        return view('layouts.course/layouts_course', compact('courses'));
    }  // end method
}
