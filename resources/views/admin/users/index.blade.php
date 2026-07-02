@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="mb-1">
                مدیریت کاربران
            </h2>

            <p class="text-muted mb-0">
                حساب‌های کاربری اولیا و مدیران
            </p>
        </div>

        <a href="{{ route('users.create') }}"
           class="btn btn-warning">
            <i class="bi bi-person-plus"></i>
            افزودن کاربر
        </a>

    </div>

    <div class="card shadow-sm p-4">

        <div class="table-responsive">

            <table class="table table-hover">

                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>کد ملی</th>
                    <th>نقش</th>
                    <th>تاریخ ثبت</th>
                    <th>عملیات</th>
                </tr>
                </thead>

                <tbody>

                @forelse($users as $user)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <strong>{{ $user->name }}</strong>
                        </td>

                        <td>{{ $user->national_code }}</td>

                        <td>
                            @if($user->role === 'admin')
                                <span class="badge bg-danger">
                                ادمین
                            </span>
                            @else
                                <span class="badge bg-primary">
                                ولی دانش‌آموز
                            </span>
                            @endif
                        </td>

                        <td>{{ optional($user->created_at)->format('Y/m/d') }}</td>

                        <td>
                            <div class="d-flex gap-2">

                                <a href="{{ route('users.edit', $user->id) }}"
                                   class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                    ویرایش
                                </a>

                                <form method="POST"
                                      action="{{ route('users.destroy', $user->id) }}"
                                      onsubmit="return confirm('آیا از حذف این کاربر مطمئن هستید؟')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                        {{ auth()->id() === $user->id ? 'disabled' : '' }}>
                                        <i class="bi bi-trash"></i>
                                        حذف
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            هنوز کاربری ثبت نشده است.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

@endsection
