<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ورود به سامانه نظرسنجی</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            font-family: Tahoma, Arial, sans-serif;
        }

        .login-wrapper {
            min-height: 100vh;
        }

        .login-card {
            border: none;
            border-radius: 28px;
            overflow: hidden;
            max-width: 980px;
            width: 100%;
        }

        .login-side {
            background: #111827;
            color: white;
            padding: 50px 35px;
        }

        .login-form {
            padding: 50px 35px;
            background: #fff;
        }

        .form-control {
            border-radius: 14px;
            padding: 12px;
        }

        .btn {
            border-radius: 14px;
            padding: 12px;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            margin-bottom: 25px;
        }

        @media (max-width: 768px) {
            .login-side {
                display: none;
            }
        }
    </style>
</head>

<body>

<div class="container d-flex align-items-center justify-content-center login-wrapper">

    <div class="card login-card shadow-lg">

        <div class="row g-0">

            <div class="col-md-5 login-side">

                <div class="icon-box">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>

                <h2 class="mb-3">
                    سامانه نظرسنجی مدرسه
                </h2>

                <p class="text-white-50 lh-lg">
                    اولیای محترم می‌توانند پس از ورود، درباره عملکرد اساتید مدرسه نظر خود را ثبت کنند.
                </p>

                <div class="mt-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        ورود فقط برای کاربران عضو
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        نام کاربری برابر کد ملی
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        ثبت نظر برای هر استاد
                    </div>
                </div>

            </div>

            <div class="col-md-7 login-form">

                <h3 class="mb-2">
                    ورود به حساب کاربری
                </h3>

                <p class="text-muted mb-4">
                    لطفاً کد ملی و رمز عبور خود را وارد کنید.
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        اطلاعات وارد شده صحیح نیست.
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            کد ملی
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-vcard"></i>
                            </span>

                            <input type="text"
                                   name="national_code"
                                   value="{{ old('national_code') }}"
                                   class="form-control"
                                   placeholder="مثلاً 0012345678"
                                   required
                                   autofocus>
                        </div>

                        @error('national_code')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            رمز عبور
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="رمز عبور"
                                   required>
                        </div>

                        @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input"
                               type="checkbox"
                               name="remember"
                               id="remember">

                        <label class="form-check-label" for="remember">
                            مرا به خاطر بسپار
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-box-arrow-in-left"></i>
                        ورود
                    </button>
                </form>

                <div class="alert alert-info mt-4 mb-0">
                    اگر حساب کاربری ندارید، با مدیریت مدرسه تماس بگیرید.
                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
