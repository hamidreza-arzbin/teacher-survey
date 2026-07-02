@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="mb-4">

            <a href="{{ route('reports.index') }}"
               class="btn btn-secondary">

                <i class="bi bi-arrow-right"></i>

                بازگشت

            </a>

        </div>

        <div class="row">

            {{-- RIGHT SIDE --}}

            <div class="col-lg-4">

                {{-- Teacher Info --}}

                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-body text-center">

                        <div class="mb-3">

                            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center"
                                 style="width:90px;height:90px;font-size:35px;">

                                <i class="bi bi-person"></i>

                            </div>

                        </div>

                        <h3 class="fw-bold">

                            {{ $teacher->name }}

                        </h3>

                        <p class="text-muted">

                            {{ $teacher->subject }}

                        </p>

                        <hr>

                        <div class="mb-3">

                            <h5 class="text-muted">
                                میانگین رضایت
                            </h5>

                            <span class="badge bg-dark fs-4 px-4 py-2">

                            {{ $averageScore }} / 4

                        </span>

                        </div>

                        <div>

                            <h6 class="text-muted">
                                تعداد کل پاسخ‌ها
                            </h6>

                            <span class="badge bg-primary fs-6">

                            {{ $total }}

                        </span>

                        </div>

                    </div>

                </div>

                {{-- Statistics --}}

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-dark text-white">

                        <i class="bi bi-graph-up"></i>

                        آمار رضایت

                    </div>

                    <div class="card-body">

                        {{-- Excellent --}}

                        <div class="mb-4">

                            <div class="d-flex justify-content-between mb-1">

                                <span>عالی</span>

                                <span>{{ $excellentPercent }}%</span>

                            </div>

                            <div class="progress" style="height: 22px;">

                                <div class="progress-bar bg-success"
                                     style="width: {{ $excellentPercent }}%">

                                    {{ $excellent }}

                                </div>

                            </div>

                        </div>

                        {{-- Good --}}

                        <div class="mb-4">

                            <div class="d-flex justify-content-between mb-1">

                                <span>خوب</span>

                                <span>{{ $goodPercent }}%</span>

                            </div>

                            <div class="progress" style="height: 22px;">

                                <div class="progress-bar bg-primary"
                                     style="width: {{ $goodPercent }}%">

                                    {{ $good }}

                                </div>

                            </div>

                        </div>

                        {{-- Average --}}

                        <div class="mb-4">

                            <div class="d-flex justify-content-between mb-1">

                                <span>متوسط</span>

                                <span>{{ $averagePercent }}%</span>

                            </div>

                            <div class="progress" style="height: 22px;">

                                <div class="progress-bar bg-warning text-dark"
                                     style="width: {{ $averagePercent }}%">

                                    {{ $average }}

                                </div>

                            </div>

                        </div>

                        {{-- Weak --}}

                        <div>

                            <div class="d-flex justify-content-between mb-1">

                                <span>ضعیف</span>

                                <span>{{ $weakPercent }}%</span>

                            </div>

                            <div class="progress" style="height: 22px;">

                                <div class="progress-bar bg-danger"
                                     style="width: {{ $weakPercent }}%">

                                    {{ $weak }}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            {{-- LEFT SIDE --}}

            <div class="col-lg-8">

                {{-- Chart --}}

                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-primary text-white">

                        <i class="bi bi-pie-chart"></i>

                        نمودار تحلیل

                    </div>

                    <div class="card-body">

                        @if($total > 0)

                            <div style="max-height: 400px;">
                                <canvas id="surveyChart"></canvas>
                            </div>

                        @else

                            <div class="alert alert-warning mb-0">
                                هنوز پاسخی برای نمایش نمودار ثبت نشده است.
                            </div>

                        @endif

                    </div>

                </div>


                {{-- Comments --}}

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-success text-white">

                        <i class="bi bi-chat-left-text"></i>

                        نظرات اولیا

                    </div>

                    <div class="card-body">

                        @forelse($surveys as $survey)

                            <div class="border rounded p-3 mb-3">

                                <div class="d-flex justify-content-between mb-2">

                                    <strong>

                                        {{ $survey->user->name }}

                                    </strong>

                                    <small class="text-muted">

                                        {{ $survey->created_at->format('Y/m/d') }}

                                    </small>

                                </div>

                                <div class="text-muted">

                                    {{ $survey->comment ?: 'بدون توضیح' }}

                                </div>

                            </div>

                        @empty

                            <div class="alert alert-warning mb-0">

                                نظری ثبت نشده است.

                            </div>

                        @endforelse

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('scripts')

    @if($total > 0)

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {

                const chartElement = document.getElementById('surveyChart');

                if (!chartElement) {
                    console.error('Canvas surveyChart پیدا نشد.');
                    return;
                }

                if (typeof Chart === 'undefined') {
                    console.error('Chart.js لود نشده است.');
                    return;
                }

                const ctx = chartElement.getContext('2d');

                new Chart(ctx, {
                    type: 'doughnut',

                    data: {
                        labels: ['عالی', 'خوب', 'متوسط', 'ضعیف'],

                        datasets: [{
                            label: 'تعداد پاسخ‌ها',

                            data: [
                                {{ $excellent }},
                                {{ $good }},
                                {{ $average }},
                                {{ $weak }}
                            ],

                            backgroundColor: [
                                '#198754',
                                '#0d6efd',
                                '#ffc107',
                                '#dc3545'
                            ],

                            borderColor: '#ffffff',

                            borderWidth: 3
                        }]
                    },

                    options: {
                        responsive: true,

                        maintainAspectRatio: false,

                        cutout: '65%',

                        plugins: {
                            legend: {
                                position: 'bottom',

                                labels: {
                                    font: {
                                        family: 'Tahoma',
                                        size: 13
                                    },
                                    padding: 20
                                }
                            },

                            tooltip: {
                                rtl: true,

                                callbacks: {
                                    label: function(context) {
                                        return context.label + ': ' + context.raw + ' پاسخ';
                                    }
                                }
                            }
                        }
                    }
                });

            });
        </script>

    @endif

@endsection

