@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="mb-1">
                مدیریت سوالات
            </h2>

            <p class="text-muted mb-0">
                سوالاتی که برای همه اساتید نمایش داده می‌شوند
            </p>
        </div>

        <a href="{{ route('questions.create') }}"
           class="btn btn-success">
            <i class="bi bi-plus-circle"></i>
            افزودن سوال
        </a>

    </div>

    <div class="card shadow-sm p-4">

        <div class="table-responsive">

            <table class="table table-hover">

                <thead>
                <tr>
                    <th>#</th>
                    <th>متن سوال</th>
                    <th>تاریخ ثبت</th>
                    <th>عملیات</th>
                </tr>
                </thead>

                <tbody>

                @forelse($questions as $question)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $question->title }}
                        </td>

                        <td>{{ $question->created_at->format('Y/m/d') }}</td>

                        <td>
                            <div class="d-flex gap-2">

                                <a href="{{ route('questions.edit', $question->id) }}"
                                   class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                    ویرایش
                                </a>

                                <form method="POST"
                                      action="{{ route('questions.destroy', $question->id) }}"
                                      onsubmit="return confirm('آیا از حذف این سوال مطمئن هستید؟')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                        حذف
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            هنوز سوالی ثبت نشده است.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

@endsection
