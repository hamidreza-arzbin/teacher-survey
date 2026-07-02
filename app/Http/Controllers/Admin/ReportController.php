<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Survey;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ReportController extends Controller {
    public function index() {
        $teachers = Teacher::with('surveys.answers')->get();

        foreach ($teachers as $teacher) {

            $sum = 0;
            $count = 0;

            foreach ($teacher->surveys as $survey) {

                foreach ($survey->answers as $answer) {

                    $count++;

                    switch ($answer->score) {

                        case 'excellent':
                            $sum += 4;
                            break;

                        case 'good':
                            $sum += 3;
                            break;

                        case 'average':
                            $sum += 2;
                            break;

                        case 'weak':
                            $sum += 1;
                            break;
                    }
                }
            }

            $teacher->avg_score = $count
                ? round($sum / $count, 2)
                : 0;

            $teacher->answers_count = $count;
        }

        $teachers = $teachers->sortByDesc('avg_score');

        return view('admin.reports.index', compact('teachers'));
    }

    public function show(Teacher $teacher) {
        $surveys = Survey::where('teacher_id', $teacher->id)
            ->with('answers', 'user')
            ->latest()
            ->get();

        $answers = Answer::whereHas('survey', function ($query) use ($teacher) {

            $query->where('teacher_id', $teacher->id);

        })->get();

        $excellent = $answers->where('score', 'excellent')->count();
        $good = $answers->where('score', 'good')->count();
        $average = $answers->where('score', 'average')->count();
        $weak = $answers->where('score', 'weak')->count();

        $total = $answers->count();

        $sum = 0;

        foreach ($answers as $answer) {

            switch ($answer->score) {

                case 'excellent':
                    $sum += 4;
                    break;

                case 'good':
                    $sum += 3;
                    break;

                case 'average':
                    $sum += 2;
                    break;

                case 'weak':
                    $sum += 1;
                    break;
            }
        }

        $averageScore = $total
            ? round($sum / $total, 2)
            : 0;

        $excellentPercent = $total
            ? round(($excellent / $total) * 100)
            : 0;

        $goodPercent = $total
            ? round(($good / $total) * 100)
            : 0;

        $averagePercent = $total
            ? round(($average / $total) * 100)
            : 0;

        $weakPercent = $total
            ? round(($weak / $total) * 100)
            : 0;

        return view('admin.reports.show', compact(
            'teacher',
            'surveys',
            'excellent',
            'good',
            'average',
            'weak',
            'total',
            'averageScore',
            'excellentPercent',
            'goodPercent',
            'averagePercent',
            'weakPercent'
        ));
    }
}
