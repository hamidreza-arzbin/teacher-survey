<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index() {
        $teachers = Teacher::count();
        $questions = Question::count();
        $users = User::where('role', 'parent')->count();
        $surveys = Survey::count();

        return view('admin.dashboard', compact(
            'teachers',
            'questions',
            'users',
            'surveys'
        ));
    }
}
