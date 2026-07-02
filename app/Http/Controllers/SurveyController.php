<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Survey;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SurveyController extends Controller {
    public function index() {
        $teachers = Teacher::all();

        $completed = Survey::where('user_id', auth()->id())
            ->pluck('teacher_id')
            ->toArray();

        return view('survey.index', compact('teachers', 'completed'));
    }

    public function show(Teacher $teacher) {
        $exists = Survey::where('teacher_id', $teacher->id)
            ->where('user_id', auth()->id())
            ->exists();

        if ($exists) {
            return redirect()
                ->route('survey.index')
                ->with('error', 'شما قبلاً برای این استاد نظر ثبت کرده‌اید.');
        }

        $questions = Question::all();

        return view('survey.show', compact('teacher', 'questions'));
    }

    public function store(Request $request, Teacher $teacher) {
        $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|in:excellent,good,average,weak',
            'comment' => 'nullable|max:1000'
        ]);

        $exists = Survey::where('teacher_id', $teacher->id)
            ->where('user_id', auth()->id())
            ->exists();

        if ($exists) {
            return redirect()
                ->route('survey.index')
                ->with('error', 'این نظرسنجی قبلاً ثبت شده است.');
        }

        $survey = Survey::create([
            'user_id' => auth()->id(),
            'teacher_id' => $teacher->id,
            'comment' => $request->comment
        ]);

        foreach ($request->answers as $question_id => $score) {

            Answer::create([
                'survey_id' => $survey->id,
                'question_id' => $question_id,
                'score' => $score
            ]);
        }

        return redirect()
            ->route('survey.index')
            ->with('success', 'نظر شما ثبت شد.');
    }

}
