<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انشر تبضينتك | EL ACBADS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: #f7f7f8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .page-content {
            flex: 1;
        }

        .main-section {
            max-width: 750px;
            margin: 55px auto;
        }

        .page-title {
            text-align: center;
            margin-bottom: 28px;
        }

        .page-title h1 {
            font-size: 27px;
            font-weight: 900;
            color: #222;
        }

        .page-title p {
            color: #888;
            font-size: 13px;
        }

        .form-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 16px;
            padding: 28px;
        }

        .form-label {
            font-size: 13px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .form-control {
            border: 1px solid #e7e7e7;
            border-radius: 10px;
            padding: 14px;
            font-size: 14px;
            resize: vertical;
            box-shadow: none !important;
        }

        .form-control:focus {
            border-color: #bba77f;
        }

        .hint {
            color: #999;
            font-size: 11px;
            margin-top: 8px;
        }

        .btn-main {
            background: #222;
            color: #fff;
            border: 0;
            border-radius: 9px;
            padding: 12px 22px;
            font-size: 13px;
            font-weight: 800;
        }

        .btn-main:hover {
            background: #927744;
            color: #fff;
        }

        .btn-back {
            color: #777;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }

        .alert {
            font-size: 13px;
            border: 0;
        }

        @media (max-width: 576px) {
            .main-section {
                margin: 30px auto;
            }

            .form-card {
                padding: 20px;
            }

            .page-title h1 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content container">

        <div class="main-section">

            <div class="page-title">
                <h1><i class="bi bi-pencil-square me-1"></i> انشر تبضينتك</h1>
                <p>عاوزك تفرقعهم</p>
            </div>

            <div class="form-card">

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="content" class="form-label">محتوى المنشور</label>

                        <textarea name="content" id="content" rows="8" maxlength="5000" class="form-control"
                            placeholder="اكتب اللي في قلبك يا كبدس...">{{ old('content') }}</textarea>

                        <div class="hint">الحد الاقصى 5000 حرف.</div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <a href="{{ route('posts.index') }}" class="btn-back">
                            <i class="bi bi-arrow-right me-1"></i>
                            رجوع للمنشورات
                        </a>

                        <button type="submit" class="btn-main">
                            <i class="bi bi-send me-1"></i>
                            نشر المنشور
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
