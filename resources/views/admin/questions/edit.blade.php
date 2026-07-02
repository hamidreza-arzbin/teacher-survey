@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm p-4">

                <h3 class="mb-4">
                    ویرایش سوال
                </h3>

                <form method="POST" action="{{ route('questions.update', $question->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="form-label">
                            متن سوال
                        </label>

                        <textarea name="title"
                                  class="form-control"
                                  rows="5"
                                  required>{{ old('title', $question->title) }}</textarea>

                        @error('title')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">

                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i>
                            بروزرسانی
                        </button>

                        <a href="{{ route('questions.index') }}"
                           class="btn btn-light">
                            بازگشت
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
