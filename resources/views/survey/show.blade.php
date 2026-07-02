@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="top-card shadow">
                <h2 class="mb-2">
                    نظرسنجی درباره {{ $teacher->name }}
                </h2>

                <p class="mb-0">
                    لطفاً با دقت به سوالات پاسخ دهید و در صورت نیاز توضیحات خود را بنویسید.
                </p>
            </div>

            <div class="progress mb-4" style="height: 22px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated"
                     style="width: 100%;">
                    فرم نظرسنجی این استاد
                </div>
            </div>

            <form method="POST"
                  action="{{ route('survey.store', $teacher->id) }}">

                @csrf

                @foreach($questions as $question)

                    <div class="card shadow-sm mb-4">

                        <div class="card-body">

                            <h5 class="mb-3">
                                {{ $loop->iteration }}.
                                {{ $question->title }}
                            </h5>

                            <div class="row g-3">

                                <div class="col-md-3 col-6">
                                    <label class="survey-option w-100">
                                        <input type="radio"
                                               name="answers[{{ $question->id }}]"
                                               value="excellent"
                                               required>
                                        عالی
                                    </label>
                                </div>

                                <div class="col-md-3 col-6">
                                    <label class="survey-option w-100">
                                        <input type="radio"
                                               name="answers[{{ $question->id }}]"
                                               value="good"
                                               required>
                                        خوب
                                    </label>
                                </div>

                                <div class="col-md-3 col-6">
                                    <label class="survey-option w-100">
                                        <input type="radio"
                                               name="answers[{{ $question->id }}]"
                                               value="average"
                                               required>
                                        متوسط
                                    </label>
                                </div>

                                <div class="col-md-3 col-6">
                                    <label class="survey-option w-100">
                                        <input type="radio"
                                               name="answers[{{ $question->id }}]"
                                               value="weak"
                                               required>
                                        ضعیف
                                    </label>
                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

                <div class="card shadow-sm mb-4">

                    <div class="card-body">

                        <label class="form-label">
                            توضیحات درباره این دبیر
                        </label>

                        <textarea name="comment"
                                  class="form-control"
                                  rows="5"
                                  placeholder="نظر، پیشنهاد یا توضیح خود را بنویسید...">{{ old('comment') }}</textarea>

                    </div>

                </div>

                <div class="d-flex justify-content-between">

                    <a href="{{ route('survey.index') }}"
                       class="btn btn-light">
                        بازگشت
                    </a>

                    <button type="submit"
                            class="btn btn-success px-4">
                        ثبت و ادامه
                        <i class="bi bi-arrow-left"></i>
                    </button>

                </div>

            </form>

        </div>

    </div>

@endsection
