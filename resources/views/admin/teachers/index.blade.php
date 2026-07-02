@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="mb-1">
                مدیریت اساتید
            </h2>

            <p class="text-muted mb-0">
                لیست دبیرهای ثبت‌شده در سامانه
            </p>
        </div>

        <a href="{{ route('teachers.create') }}"
           class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>
            افزودن استاد
        </a>

    </div>

    <div class="card shadow-sm p-4">

        <div class="table-responsive">

            <table class="table table-hover">

                <thead>
                <tr>
                    <th>#</th>
                    <th>نام استاد</th>
                    <th>درس</th>
                    <th>تاریخ ثبت</th>
                    <th>عملیات</th>
                </tr>
                </thead>

                <tbody>

                @forelse($teachers as $teacher)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <strong>{{ $teacher->name }}</strong>
                        </td>

                        <td>{{ $teacher->subject ?? '-' }}</td>

                        <td>{{ $teacher->created_at->format('Y/m/d') }}</td>

                        <td>
                            <div class="d-flex gap-2">

                                <a href="{{ route('teachers.edit', $teacher->id) }}"
                                   class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                    ویرایش
                                </a>

                                <form method="POST"
                                      action="{{ route('teachers.destroy', $teacher->id) }}"
                                      onsubmit="return confirm('آیا از حذف این استاد مطمئن هستید؟')">
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
                        <td colspan="5" class="text-center text-muted py-4">
                            هنوز استادی ثبت نشده است.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

@endsection
