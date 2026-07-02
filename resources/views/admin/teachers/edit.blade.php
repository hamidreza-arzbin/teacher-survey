@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow-sm p-4">

                <h3 class="mb-4">
                    ویرایش استاد
                </h3>

                <form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">
                            نام استاد
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name', $teacher->name) }}"
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
                               value="{{ old('subject', $teacher->subject) }}"
                               placeholder="مثلاً ریاضی، علوم، فارسی">

                        @error('subject')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i>
                            بروزرسانی
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
