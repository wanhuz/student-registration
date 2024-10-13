<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CourseAddController extends Controller
{

    public function index()
    {
        $user_dept = Auth::User()->department;
        $courses = $this->getCourseAll($user_dept);
        $department = $user_dept;

        return view('course-add', compact('courses', 'department'));
    }

    public function search(Request $request)
    {
        $course_name_or_code = $request->input('course_name_or_code');

        $user_dept = Auth::User()->department;
        $courses_filtered = Course::where('department', '=', $user_dept)
                                    ->where(function($query) use ($course_name_or_code) {
                                        $query->where('name', 'like', '%' . $course_name_or_code . '%') 
                                            ->orWhere('code', 'like', '%' . $course_name_or_code . '%');
                                    })->get();

        $department = $user_dept;
        $courses = $courses_filtered;

        return view('course-add', compact('courses', 'department'));
    }

    public function getUserCourse($user_id) {
        $user_id = Auth::User()->id;

        $user_courses = \DB::table('user_courses')
                        ->rightJoin('courses', 'courses.id', '=', 'course_id')
                        ->whereNotNull('user_courses.course_id')
                        ->where('user_id', '=', $user_id)
                        ->get();
        
        return $user_courses;
    }

    public function getCourseAll($department) {
        $courses = Course::where('department', '=', $department)->get();
        
        return $courses;
    }

    public function add(Request $request) {
        $selected_courses_id = $request->input('courses_id');
        $user = auth()->user();

        foreach($selected_courses_id as $course_id) {
            $user->course()->attach($course_id);
        }

        return redirect()->back()->with('success', 'Course added successfully!');
    }

    private function getCourseId($course_code) {
        $course = Course::where('code', '=', $course_code)->first();

        if ($course) {
            return $course->id;
        }

        return null;
    }
}
