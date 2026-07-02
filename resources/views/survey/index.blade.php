@extends('layouts.app')

@section('content')

    <div class="top-card shadow">
        <h2 class="mb-2">
            نظرسنجی اساتید
        </h2>

        <p class="mb-0">
            لطفاً درباره هر دبیر به سوالات پاسخ دهید. فرم‌های تکمیل‌شده مشخص شده‌اند.
        </p>
    </div>

    <div class="row">

        @forelse($teachers as $teacher)

            <div class="col-md-4 mb-4">

                <div class="card shadow-sm h-100">

                    <div class="card-body d-flex flex-column">

                        <div class="d-flex justify-content-between align-items-start mb-3">

                            <div>
                                <h5 class="mb-1">
                                    {{ $teacher->name }}
                                </h5>

                                <p class="text-muted mb-0">
                                    {{ $teacher->subject ?? 'بدون درس' }}
                                </p>
                            </div>

                            @if(in_array($teacher->id, $completed))
                                <span class="badge bg-success">
                                تکمیل شده
                            </span>
                            @else
                                <span class="badge bg-warning text-dark">
                                انجام نشده
                            </span>
                            @endif

                        </div>

                        <div class="mt-auto">

                            @if(in_array($teacher->id, $completed))

                                <button class="btn btn-light w-100" disabled>
                                    <i class="bi bi-check-circle"></i>
                                    ثبت شده
                                </button>

                            @else

                                <a href="{{ route('survey.show', $teacher->id) }}"
                                   class="btn btn-primary w-100">
                                    <i class="bi bi-pencil-square"></i>
                                    شروع نظرسنجی
                                </a>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">
                <div class="alert alert-info">
                    هنوز استادی برای نظرسنجی ثبت نشده است.
                </div>
            </div>

        @endforelse

    </div>

@endsection
