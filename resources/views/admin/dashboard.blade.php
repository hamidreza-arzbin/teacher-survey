@extends('layouts.app')

@section('content')

    <div class="top-card shadow">
        <h2 class="mb-2">
            داشبورد مدیریت
        </h2>

        <p class="mb-0">
            خوش آمدید، از این بخش می‌توانید کاربران، اساتید، سوالات و نتایج نظرسنجی را مدیریت کنید.
        </p>
    </div>

    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm p-4 text-center">
                <i class="bi bi-person-video3 fs-1 text-primary"></i>
                <h2 class="mt-3">{{ $teachers }}</h2>
                <p class="text-muted mb-0">اساتید</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm p-4 text-center">
                <i class="bi bi-patch-question fs-1 text-success"></i>
                <h2 class="mt-3">{{ $questions }}</h2>
                <p class="text-muted mb-0">سوالات</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm p-4 text-center">
                <i class="bi bi-people fs-1 text-warning"></i>
                <h2 class="mt-3">{{ $users }}</h2>
                <p class="text-muted mb-0">اولیا</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm p-4 text-center">
                <i class="bi bi-ui-checks-grid fs-1 text-danger"></i>
                <h2 class="mt-3">{{ $surveys }}</h2>
                <p class="text-muted mb-0">فرم‌های ثبت‌شده</p>
            </div>
        </div>

    </div>

    <div class="card shadow-sm p-4">
        <h4 class="mb-3">
            دسترسی سریع
        </h4>

        <div class="row">

            <div class="col-md-4 mb-3">
                <a href="{{ route('teachers.create') }}"
                   class="btn btn-primary w-100">
                    <i class="bi bi-plus-circle"></i>
                    افزودن استاد
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ route('questions.create') }}"
                   class="btn btn-success w-100">
                    <i class="bi bi-plus-circle"></i>
                    افزودن سوال
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ route('users.create') }}"
                   class="btn btn-warning w-100">
                    <i class="bi bi-person-plus"></i>
                    افزودن کاربر
                </a>
            </div>

        </div>
    </div>

@endsection
