@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow-sm p-4">

                <h3 class="mb-4">
                    افزودن استاد جدید
                </h3>

                <form method="POST" action="{{ route('teachers.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            نام استاد
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

                    <div class="mb-4">
                        <label class="form-label">
                            نام درس
                        </label>

                        <input type="text"
                               name="subject"
                               class="form-control"
                               value="{{ old('subject') }}"
                               placeholder="مثلاً ریاضی، علوم، فارسی">
                    </div>

                    <div class="d-flex gap-2">

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i>
                            ثبت استاد
                        </button>

                        <a href="{{ route('teachers.index') }}"
                           class="btn btn-light">
                            بازگشت
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
