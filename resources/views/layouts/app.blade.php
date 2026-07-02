<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>سامانه نظرسنجی مدرسه</title>

    <link href="{{ asset('admin-assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap-icons.min.css') }}">

    <script src="{{ asset('admin-assets/js/jquery-4.0.0.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap.bundle.min.js') }}"></script>

</head>

<body>

<div class="d-flex main-wrapper">

    @auth
        <aside class="sidebar p-3">

            <div class="sidebar-brand">
                <i class="bi bi-mortarboard-fill"></i>
                مدرسه من
            </div>

            @if(auth()->user()->role === 'admin')

                <a href="{{ url('/dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    داشبورد
                </a>

                <a href="{{ route('teachers.index') }}">
                    <i class="bi bi-person-video3"></i>
                    مدیریت اساتید
                </a>

                <a href="{{ route('questions.index') }}">
                    <i class="bi bi-patch-question"></i>
                    مدیریت سوالات
                </a>

                <a href="{{ route('users.index') }}">
                    <i class="bi bi-people"></i>
                    مدیریت کاربران
                </a>

                <a href="{{ route('reports.index') }}"
                   class="nav-link text-white">
                    <i class="bi bi-bar-chart"></i>
                    گزارشات
                </a>

            @endif

            <a href="{{ route('survey.index') }}">
                <i class="bi bi-ui-checks-grid"></i>
                نظرسنجی اساتید
            </a>

            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf

                <button type="submit" class="btn btn-danger w-100 logout-btn">
                    <i class="bi bi-box-arrow-right"></i>
                    خروج
                </button>
            </form>

        </aside>
    @endauth

    <main class="content-area">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </main>

</div>

@yield('scripts')

</body>
</html>
