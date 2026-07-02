<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller {
    public function index() {
        $teachers = Teacher::latest()->get();

        return view('admin.teachers.index', compact('teachers'));
    }

    public function create() {
        return view('admin.teachers.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'subject' => 'nullable|max:255'
        ]);

        Teacher::create($request->all());

        return redirect()->route('teachers.index')
            ->with('success', 'استاد ثبت شد.');
    }

    public function edit(Teacher $teacher) {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher) {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'subject' => 'nullable|max:255'
        ]);

        $teacher->update($request->all());

        return redirect()->route('teachers.index')
            ->with('success', 'بروزرسانی انجام شد.');
    }

    public function destroy(Teacher $teacher) {
        if ($teacher->surveys()->exists()) {

            return redirect()->route('teachers.index')
                ->with('error', 'برای این استاد نظرسنجی ثبت شده است.');
        }

        $teacher->delete();

        return redirect()->route('teachers.index')
            ->with('success', 'استاد حذف شد.');
    }
}
