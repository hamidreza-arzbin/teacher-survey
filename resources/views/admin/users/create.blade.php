@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow-sm p-4">

                <h3 class="mb-4">
                    افزودن کاربر جدید
                </h3>

                <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            نام و نام خانوادگی
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               required>

                        @error('name')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            کد ملی
                        </label>

                        <input type="text"
                               name="national_code"
                               class="form-control"
                               value="{{ old('national_code') }}"
                               required>

                        @error('national_code')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">
                            رمز عبور
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               required>

                        @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">
                            نقش کاربر
                        </label>

                        <select name="role" class="form-select" required>
                            <option value="parent" {{ old('role') === 'parent' ? 'selected' : '' }}>
                                ولی دانش‌آموز
                            </option>

                            <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>
                                ادمین
                            </option>
                        </select>

                        @error('role')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>



                    <div class="d-flex gap-2">

                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-check-circle"></i>
                            ثبت کاربر
                        </button>

                        <a href="{{ route('users.index') }}"
                           class="btn btn-light">
                            بازگشت
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
