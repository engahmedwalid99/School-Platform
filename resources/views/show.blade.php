<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $data->name }} | EL ACBADS</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Cairo', sans-serif;
            background: #f5f5f5;
            color: #292929;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .page-content {
            flex: 1;
            padding: 40px 15px;
        }

        .profile-container {
            max-width: 950px;
            margin: auto;
        }

        .profile-card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .025);
        }

        .profile-cover {
            height: 180px;
            background: linear-gradient(120deg, #292929, #49443a, #9a8765);
        }

        .profile-main {
            padding: 0 35px 30px;
        }

        .profile-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-top: -65px;
            position: relative;
        }

        .profile-avatar {
            width: 135px;
            height: 135px;
            border-radius: 50%;
            border: 5px solid #fff;
            background: #eee8dc;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            color: #9a8765;
            font-size: 48px;
            font-weight: 900;
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .account-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 13px;
            border-radius: 30px;
            background: #f3f0e9;
            color: #887653;
            font-size: 11px;
            font-weight: 800;
        }

        .admin-badge {
            background: #292929;
            color: #fff;
        }

        .profile-name {
            font-size: 25px;
            font-weight: 900;
            margin: 18px 0 5px;
        }

        .profile-position {
            color: #9a8765;
            font-size: 13px;
            font-weight: 800;
        }

        .profile-location {
            color: #888;
            font-size: 12px;
            margin-top: 8px;
        }

        .profile-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 28px;
        }

        .stat-box {
            background: #faf9f6;
            border: 1px solid #eeeae2;
            border-radius: 10px;
            padding: 18px 10px;
            text-align: center;
        }

        .stat-box i {
            color: #9a8765;
            font-size: 19px;
        }

        .stat-number {
            display: block;
            font-size: 22px;
            font-weight: 900;
            margin-top: 5px;
        }

        .stat-label {
            color: #888;
            font-size: 11px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 900;
            margin: 35px 0 15px;
        }

        .post-card {
            background: #fff;
            border: 1px solid #eaeaea;
            border-radius: 11px;
            padding: 20px;
            margin-bottom: 13px;
        }

        .post-content {
            font-size: 13px;
            line-height: 2;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
        }

        .post-date {
            color: #999;
            font-size: 11px;
            margin-top: 15px;
        }

        .empty-posts {
            background: #fff;
            border: 1px dashed #ddd;
            border-radius: 11px;
            padding: 35px 15px;
            text-align: center;
            color: #999;
            font-size: 13px;
        }

        .empty-posts i {
            display: block;
            font-size: 30px;
            margin-bottom: 10px;
            color: #b5a17d;
        }

        @media(max-width: 576px) {
            .page-content {
                padding: 25px 12px;
            }

            .profile-main {
                padding: 0 18px 22px;
            }

            .profile-cover {
                height: 135px;
            }

            .profile-avatar {
                width: 110px;
                height: 110px;
                font-size: 38px;
            }

            .profile-name {
                font-size: 21px;
            }

            .stat-box {
                padding: 14px 5px;
            }

            .stat-number {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content">

        <div class="profile-container">

            <div class="profile-card">

                <div class="profile-cover"></div>

                <div class="profile-main">

                    <div class="profile-header">

                        <div class="profile-avatar">

                            @if($data->profile_image)
                                <img src="{{ asset('storage/' . $data->profile_image) }}" alt="{{ $data->name }}">
                            @else
                                {{ mb_substr($data->name, 0, 1) }}
                            @endif

                        </div>

                        <div class="mb-3">

                            @if($data->account_type === 'admin')
                                <span class="account-badge admin-badge">
                                    <i class="bi bi-shield-check"></i>
                                    ادمن المنصة
                                </span>
                            @else
                                <span class="account-badge">
                                    <i class="bi bi-person-fill"></i>
                                    عضو من الاكبادس
                                </span>
                            @endif

                        </div>

                    </div>

                    <h1 class="profile-name">{{ $data->name }}</h1>

                    <div class="profile-position">
                        <i class="bi bi-award-fill"></i>
                        {{ $data->position ?? 'عضو من الاكبادس' }}
                    </div>

                    @if($data->governorate)
                        <div class="profile-location">
                            <i class="bi bi-geo-alt-fill"></i>
                            {{ $data->governorate }}
                        </div>
                    @endif

                    <div class="profile-stats">

                        <div class="stat-box">
                            <i class="bi bi-file-post"></i>
                            <span class="stat-number">
                                {{ $data->posts->count() }}
                            </span>
                            <span class="stat-label">المنشورات</span>
                        </div>

                        <div class="stat-box">
                            <i class="bi bi-heart-fill"></i>
                            <span class="stat-number">
                                {{ number_format($data->likes_count ?? 0) }}
                            </span>
                            <span class="stat-label">اعجابات الحساب</span>
                        </div>

                        <div class="stat-box">
                            <i class="bi bi-calendar-check"></i>
                            <span class="stat-number">
                                {{ $data->created_at?->format('Y') ?? '-' }}
                            </span>
                            <span class="stat-label">سنة الانضمام</span>
                        </div>

                    </div>

                </div>
            </div>

            <h2 class="section-title">
                <i class="bi bi-chat-square-text"></i>
                منشورات {{ $data->name }}
            </h2>

            @forelse($data->posts as $post)

                <div class="post-card">

                    <div class="d-flex align-items-center gap-2 mb-3">

                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 38px; height: 38px; background: #f3f0e9; color: #9a8765;">
                            <i class="bi bi-person-fill"></i>
                        </div>

                        <div>
                            <div class="fw-bold small">{{ $data->name }}</div>

                            <div class="text-muted" style="font-size: 10px;">
                                {{ $post->created_at?->diffForHumans() }}
                            </div>
                        </div>

                    </div>

                    <div class="post-content">{{ $post->content }}</div>

                    <div class="post-date">
                        <i class="bi bi-heart"></i>
                        {{ number_format($post->likes_count ?? 0) }} اعجاب
                    </div>

                </div>

            @empty

                <div class="empty-posts">
                    <i class="bi bi-chat-square-dots"></i>
                    لسه مفيش منشورات هنا يا كبدس
                    <div class="mt-2">واضح ان صاحب الحساب لسه بيسخن 😂</div>
                </div>

            @endforelse

        </div>

    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
