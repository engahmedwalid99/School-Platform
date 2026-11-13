<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $founder->name }} | مؤسسو EL ACBADS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Cairo', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #f6f6f7;
            color: #222;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .page-content {
            flex: 1;
            width: 100%;
        }

        .profile-header {
            background: #191919;
            color: white;
            padding: 45px 20px 105px;
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border: 1px solid rgba(255, 255, 255, .07);
            border-radius: 50%;
            top: -220px;
            right: -70px;
        }

        .profile-header::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border: 1px solid rgba(255, 255, 255, .07);
            border-radius: 50%;
            bottom: -220px;
            left: 10%;
        }

        .header-content {
            position: relative;
            z-index: 1;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #ccc;
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 30px;
        }

        .back-link:hover {
            color: #fff;
        }

        .profile-box {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 18px;
            padding: 25px;
            margin-top: -75px;
            position: relative;
            z-index: 2;
            box-shadow: 0 8px 30px rgba(0, 0, 0, .045);
        }

        .profile-main {
            display: flex;
            align-items: center;
            gap: 22px;
            min-width: 0;
        }

        .profile-avatar {
            width: 125px;
            height: 125px;
            border-radius: 22px;
            overflow: hidden;
            flex-shrink: 0;
            background: #eee8dc;
            border: 5px solid #fff;
            box-shadow: 0 3px 15px rgba(0, 0, 0, .1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #927744;
            font-size: 48px;
            font-weight: 900;
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-name {
            font-size: 27px;
            font-weight: 900;
            margin-bottom: 9px;
            overflow-wrap: anywhere;
        }

        .founder-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 7px 13px;
            background: #f5f0e6;
            color: #927744;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 800;
            max-width: 100%;
            overflow-wrap: anywhere;
        }

        .profile-location {
            color: #888;
            font-size: 13px;
            margin-top: 12px;
        }

        .profile-location i {
            color: #a58a5a;
            margin-left: 5px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin-top: 25px;
        }

        .stat-item {
            background: #f8f8f8;
            padding: 17px 10px;
            text-align: center;
            border-radius: 12px;
            min-width: 0;
        }

        .stat-item i {
            color: #a58a5a;
            font-size: 20px;
            display: block;
            margin-bottom: 8px;
        }

        .stat-item strong {
            display: block;
            font-size: 21px;
            font-weight: 900;
            overflow-wrap: anywhere;
        }

        .stat-item span {
            color: #888;
            font-size: 11px;
            display: block;
        }

        .content-section {
            margin-top: 30px;
        }

        .section-title {
            font-size: 19px;
            font-weight: 900;
            margin-bottom: 17px;
        }

        .info-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 15px;
            padding: 22px;
            height: 100%;
            min-width: 0;
        }

        .info-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 13px 0;
            border-bottom: 1px solid #f1f1f1;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #888;
            font-size: 12px;
            flex-shrink: 0;
        }

        .info-value {
            color: #333;
            font-size: 13px;
            font-weight: 700;
            text-align: left;
            overflow-wrap: anywhere;
            min-width: 0;
        }

        .post-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 15px;
            min-width: 0;
        }

        .post-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .post-top strong {
            overflow-wrap: anywhere;
        }

        .post-date {
            color: #999;
            font-size: 11px;
        }

        .post-content {
            font-size: 14px;
            line-height: 2;
            color: #444;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
        }

        .empty-posts {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 14px;
            padding: 35px 15px;
            text-align: center;
            color: #888;
            font-size: 13px;
        }

        .empty-posts i {
            display: block;
            font-size: 35px;
            margin-bottom: 10px;
            color: #bba77f;
        }

        @media (max-width: 767px) {
            .profile-header {
                padding: 30px 15px 95px;
            }

            .back-link {
                margin-bottom: 22px;
            }

            .profile-box {
                margin-top: -65px;
                padding: 22px 16px;
                border-radius: 16px;
            }

            .profile-main {
                flex-direction: column;
                text-align: center;
                gap: 14px;
            }

            .profile-avatar {
                width: 110px;
                height: 110px;
                border-radius: 20px;
                font-size: 42px;
            }

            .profile-name {
                font-size: 22px;
                margin-bottom: 10px;
            }

            .profile-location {
                margin-top: 10px;
            }

            .stats-grid {
                gap: 8px;
                margin-top: 22px;
            }

            .stat-item {
                padding: 14px 5px;
                border-radius: 10px;
            }

            .stat-item i {
                font-size: 18px;
                margin-bottom: 6px;
            }

            .stat-item strong {
                font-size: 17px;
            }

            .stat-item span {
                font-size: 10px;
                line-height: 1.6;
            }

            .content-section {
                margin-top: 25px;
                row-gap: 25px !important;
            }

            .section-title {
                font-size: 17px;
                margin-bottom: 13px;
            }

            .info-card {
                padding: 15px;
            }

            .info-row {
                gap: 10px;
                padding: 12px 0;
            }

            .info-label {
                font-size: 11px;
            }

            .info-value {
                font-size: 12px;
            }

            .post-card {
                padding: 16px;
                border-radius: 12px;
            }

            .post-content {
                font-size: 13px;
                line-height: 1.9;
            }

            .empty-posts {
                padding: 28px 12px;
            }
        }

        @media (max-width: 400px) {
            .profile-header {
                padding-left: 12px;
                padding-right: 12px;
            }

            .container {
                padding-left: 12px;
                padding-right: 12px;
            }

            .profile-box {
                padding: 18px 12px;
            }

            .stats-grid {
                gap: 6px;
            }

            .stat-item {
                padding: 12px 3px;
            }

            .stat-item strong {
                font-size: 15px;
            }

            .stat-item span {
                font-size: 9px;
            }

            .info-card {
                padding: 12px;
            }

            .post-top {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content">

        <section class="profile-header">
            <div class="container header-content">
                <a href="{{ route('founders') }}" class="back-link">
                    <i class="bi bi-arrow-right"></i>
                    الرجوع للمؤسسين
                </a>

                <h1 class="fw-bold fs-4 mb-2">ملف صناع العبث</h1>
                <p class="text-secondary mb-0 small">
                    كل المعلومات المتاحة عن الحمصي
                </p>
            </div>
        </section>

        <div class="container pb-5">

            <section class="profile-box">

                <div class="profile-main">

                    <div class="profile-avatar">
                        @if($founder->profile_image)
                            <img src="{{ asset('storage/' . $founder->profile_image) }}" alt="{{ $founder->name }}">
                        @else
                            {{ mb_substr($founder->name, 0, 1) }}
                        @endif
                    </div>

                    <div>
                        <h2 class="profile-name">{{ $founder->name }}</h2>

                        <div class="founder-badge">
                            <i class="bi bi-patch-check-fill"></i>
                            {{ $founder->position }}
                        </div>

                        @if($founder->governorate)
                            <div class="profile-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                {{ $founder->governorate }}
                            </div>
                        @endif
                    </div>

                </div>

                <div class="stats-grid">

                    <div class="stat-item">
                        <i class="bi bi-heart-fill"></i>
                        <strong>{{ number_format($founder->likes_count) }}</strong>
                        <span>إعجاب بالبروفايل</span>
                    </div>

                    <div class="stat-item">
                        <i class="bi bi-file-earmark-text-fill"></i>
                        <strong>{{ number_format($founder->posts_count) }}</strong>
                        <span>منشور</span>
                    </div>

                    <div class="stat-item">
                        <i class="bi bi-calendar-check"></i>
                        <strong>{{ $founder->created_at->format('Y/m/d') }}</strong>
                        <span>تاريخ الانضمام</span>
                    </div>

                </div>

            </section>

            <div class="row g-4 content-section">

                <div class="col-lg-5">

                    <h3 class="section-title">
                        <i class="bi bi-person-vcard me-1"></i>
                        بيانات العضو
                    </h3>

                    <div class="info-card">

                        <div class="info-row">
                            <span class="info-label">الاسم</span>
                            <span class="info-value">{{ $founder->name }}</span>
                        </div>

                        <div class="info-row">
                            <span class="info-label">المنصب</span>
                            <span class="info-value">{{ $founder->position }}</span>
                        </div>

                        <div class="info-row">
                            <span class="info-label">المحافظة</span>
                            <span class="info-value">{{ $founder->governorate ?: 'غير محددة' }}</span>
                        </div>

                        <div class="info-row">
                            <span class="info-label">نوع الحساب</span>
                            <span class="info-value">
                                {{ $founder->account_type === 'admin' ? 'إدارة' : 'عضو' }}
                            </span>
                        </div>

                        <div class="info-row">
                            <span class="info-label">تاريخ الانضمام</span>
                            <span class="info-value">{{ $founder->created_at->format('Y/m/d') }}</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-7">

                    <h3 class="section-title">
                        <i class="bi bi-journals me-1"></i>
                        منشورات المؤسس
                    </h3>

                    @forelse($founder->posts as $post)

                        <article class="post-card">

                            <div class="post-top">
                                <strong class="small">
                                    <i class="bi bi-person-circle me-1"></i>
                                    {{ $founder->name }}
                                </strong>

                                <span class="post-date">
                                    {{ $post->created_at->format('Y/m/d - h:i A') }}
                                </span>
                            </div>

                            <div class="post-content">{{ $post->content }}</div>

                        </article>

                    @empty

                        <div class="empty-posts">
                            <i class="bi bi-chat-square-text"></i>
                            المؤسس لسه منزلش منشورات.
                        </div>

                    @endforelse

                </div>

            </div>

        </div>

    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
