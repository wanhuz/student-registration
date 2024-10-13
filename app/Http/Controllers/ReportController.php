<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReportController extends Controller
{

    public function index()
    {
        $classes = $this->getClasses();
        $credit_hours = $this->getCreditHours();
        $credit_hours_percent = $this->getCreditHoursPercentage($credit_hours);
        $days = $this->getDays();
        $labels = $this->getLabels($days);
        $days_count = $this->getDayCount($days);

        return view('report', compact('classes', 'credit_hours', 'credit_hours_percent', 'labels', 'days_count'));
    }

    public function getCreditHours()
    {
        $user = Auth::user();
        $credit_hours = $user->course()->sum('credit_hours');

        return $credit_hours;
    }

    public function getCreditHoursPercentage($credit_hours)
    {
        // High limit of credit hours is 30
        $max_credit_hours = 30;
        return ($credit_hours / $max_credit_hours) * 100;
    }


    public function getDays()
    {
        $user = Auth::user();
        $user_course_days = $user->course()->select('day')->get();
        $days = [];

        foreach ($user_course_days as $item) {
            $day = $item->day;

            array_push($days, $day);
        }
        
        return $days;
    }

    public function getLabels($days) {
        $labels = "[";
        $uniqueDays = array_unique($days);

        foreach ($uniqueDays as $day) {
            $labels = $labels . "'" . $day . "',";
        }

        $labels = substr_replace($labels, '', -1);
        $labels = $labels . "]";

        return $labels;
    }

    public function getDayCount($days) {
        $count_data = "[";
        $countedDays = array_count_values($days);

        foreach ($countedDays as $count) {
            $count_data = $count_data . $count . ",";
        }

        $count_data = substr_replace($count_data, '', -1);
        $count_data = $count_data . "]";

        return $count_data;
    }

    public function getClasses()
    {
        $user = Auth::user();
        $user_courses = $user->course()->select('name', 'day', 'time')->get();

        return $user_courses;
    }

}
