<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller {
    public function index() {
        $users = User::latest()->get();

        return view('admin.users.index', compact('users'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'national_code' => 'required|digits:10|unique:users,national_code',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,parent'
        ]);

        User::create([
            'name' => $request->name,
            'national_code' => $request->national_code,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('users.index')
            ->with('success', 'کاربر ثبت شد.');
    }

    public function edit(User $user) {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'national_code' => [
                'required',
                'digits:10',
                Rule::unique('users', 'national_code')->ignore($user->id)
            ],
            'password' => 'nullable|min:6',
            'role' => 'required|in:admin,parent'
        ]);

        $data = [
            'name' => $request->name,
            'national_code' => $request->national_code,
            'role' => $request->role
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index')
            ->with('success', 'بروزرسانی انجام شد.');
    }

    public function destroy(User $user) {
        if (auth()->id() == $user->id) {

            return redirect()->route('users.index')
                ->with('error', 'نمی‌توانید خودتان را حذف کنید.');
        }

        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'کاربر حذف شد.');
    }
}
