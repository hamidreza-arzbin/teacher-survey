@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-1">
                    تحلیل نظرسنجی اساتید
                </h2>

                <p class="text-muted mb-0">
                    مشاهده عملکرد و میزان رضایت اولیا
                </p>
            </div>

        </div>

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table align-middle table-hover">

                        <thead class="table-dark">

                        <tr>

                            <th>#</th>

                            <th>نام استاد</th>

                            <th>درس</th>

                            <th>تعداد پاسخ‌ها</th>

                            <th>میانگین رضایت</th>

                            <th>وضعیت</th>

                            <th>عملیات</th>

                        </tr>

                        </thead>

                        <tbody>

                        @forelse($teachers as $teacher)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td class="fw-bold">
                                    {{ $teacher->name }}
                                </td>

                                <td>
                                    {{ $teacher->subject }}
                                </td>

                                <td>

                                <span class="badge bg-primary">

                                    {{ $teacher->answers_count }}

                                </span>

                                </td>

                                <td>

                                <span class="badge bg-dark fs-6">

                                    {{ $teacher->avg_score }} / 4

                                </span>

                                </td>

                                <td>

                                    @if($teacher->avg_score >= 3.5)

                                        <span class="badge bg-success">
                                        عالی
                                    </span>

                                    @elseif($teacher->avg_score >= 2.5)

                                        <span class="badge bg-primary">
                                        خوب
                                    </span>

                                    @elseif($teacher->avg_score >= 1.5)

                                        <span class="badge bg-warning text-dark">
                                        متوسط
                                    </span>

                                    @else

                                        <span class="badge bg-danger">
                                        ضعیف
                                    </span>

                                    @endif

                                </td>

                                <td>

                                    <a href="{{ route('reports.show', $teacher->id) }}"
                                       class="btn btn-sm btn-dark">

                                        <i class="bi bi-bar-chart-line"></i>

                                        مشاهده تحلیل

                                    </a>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7">

                                    <div class="alert alert-warning mb-0">

                                        هنوز گزارشی ثبت نشده است.

                                    </div>

                                </td>

                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection
