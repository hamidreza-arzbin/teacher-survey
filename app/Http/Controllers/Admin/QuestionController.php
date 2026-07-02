<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller {
    public function index() {
        $questions = Question::latest()->get();

        return view('admin.questions.index', compact('questions'));
    }

    public function create() {
        return view('admin.questions.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:5|max:1000'
        ]);

        Question::create([
            'title' => $request->title
        ]);

        return redirect()->route('questions.index')
            ->with('success', 'سوال ثبت شد.');
    }

    public function edit(Question $question) {
        return view('admin.questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question) {
        $request->validate([
            'title' => 'required|min:5|max:1000'
        ]);

        $question->update([
            'title' => $request->title
        ]);

        return redirect()->route('questions.index')
            ->with('success', 'بروزرسانی انجام شد.');
    }

    public function destroy(Question $question) {
        $question->delete();

        return redirect()->route('questions.index')
            ->with('success', 'سوال حذف شد.');
    }
}
