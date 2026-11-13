<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منشورات الاكبادس | EL ACBADS</title>

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
            color: #222;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .page-content {
            flex: 1;
        }

        .hero {
            background: #191919;
            color: #fff;
            padding: 55px 20px 75px;
            text-align: center;
        }

        .hero-icon {
            width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #292929;
            color: #d9c49b;
            border-radius: 18px;
            font-size: 29px;
            margin: 0 auto 18px;
        }

        .hero h1 {
            font-size: 32px;
            font-weight: 900;
            margin-bottom: 10px;
        }

        .hero p {
            color: #bbb;
            font-size: 14px;
            margin: 0;
        }

        .posts-container {
            max-width: 850px;
            margin: -30px auto 0;
            position: relative;
            padding-bottom: 55px;
        }

        .create-box,
        .post-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 17px;
        }

        .create-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .create-box strong {
            font-size: 15px;
            font-weight: 800;
        }

        .create-box p {
            color: #999;
            font-size: 12px;
            margin: 5px 0 0;
        }

        .btn-main {
            background: #202020;
            color: #fff;
            border: 0;
            border-radius: 9px;
            padding: 10px 17px;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-main:hover {
            background: #927744;
            color: #fff;
        }

        .post-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 16px;
        }

        .author {
            display: flex;
            align-items: center;
            gap: 11px;
            min-width: 0;
        }

        .avatar {
            width: 45px;
            height: 45px;
            flex-shrink: 0;
            border-radius: 50%;
            overflow: hidden;
            background: #f0ece4;
            color: #927744;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            font-weight: 900;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-name {
            font-size: 13px;
            font-weight: 800;
            color: #222;
            text-decoration: none;
        }

        .author-name:hover {
            color: #927744;
        }

        .post-date {
            color: #999;
            font-size: 10px;
            margin-top: 3px;
        }

        .post-content {
            font-size: 14px;
            line-height: 2;
            color: #444;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
            margin-bottom: 17px;
        }

        .post-footer {
            border-top: 1px solid #f1f1f1;
            padding-top: 13px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .post-likes {
            color: #888;
            font-size: 12px;
        }

        .post-likes i {
            color: #b76a6a;
        }

        .details-link {
            color: #927744;
            text-decoration: none;
            font-size: 12px;
            font-weight: 800;
        }

        .details-link:hover {
            color: #222;
        }

        .alert {
            border: 0;
            border-radius: 10px;
            font-size: 13px;
        }

        .like-form {
            margin: 0;
        }

        .like-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #fff5f5;
            color: #d94b5b;
            border: 1px solid #f3dadd;
            border-radius: 30px;
            padding: 8px 14px;
            font-family: 'Cairo', sans-serif;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            transition: .2s;
        }

        .like-btn:hover {
            background: #d94b5b;
            color: #fff;
            border-color: #d94b5b;
        }

        .like-btn.liked {
            background: #d94b5b;
            color: #fff;
            border-color: #d94b5b;
        }

        .like-btn i {
            font-size: 14px;
        }

        .like-btn:disabled {
            cursor: default;
            opacity: .85;
        }

        .post-footer-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .empty-state {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 15px;
            padding: 50px 20px;
            text-align: center;
        }

        .empty-state i {
            display: block;
            font-size: 45px;
            color: #bba77f;
            margin-bottom: 15px;
        }

        .empty-state h3 {
            font-size: 19px;
            font-weight: 900;
        }

        .empty-state p {
            color: #999;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .pagination {
            justify-content: center;
            margin-top: 25px;
        }

        .page-link {
            color: #333;
            border-color: #eee;
        }

        .active>.page-link {
            background: #222;
            border-color: #222;
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 25px;
            }

            .create-box {
                align-items: flex-start;
                flex-direction: column;
            }

            .create-box .btn-main {
                width: 100%;
                text-align: center;
            }

            .post-card {
                padding: 16px;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content">

        <section class="hero">
            <div class="hero-icon">
                <i class="bi bi-chat-square-text"></i>
            </div>
            <h1>منشورات الاكبادس</h1>
            <p>امشي بشعار ابضن غيرك</p>
        </section>

        <div class="container posts-container">

            @if (session('success'))
                <div class="alert alert-success">
                    <i class="bi bi-check-circle me-1"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <div class="create-box">
                <div>
                    <strong>عندك تبضينة عايز تشاركها؟</strong>
                </div>

                @auth
                    <a href="{{ route('posts.create') }}" class="btn-main">
                        <i class="bi bi-plus-lg me-1"></i>
                        انشر منشور
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-main">
                        <i class="bi bi-box-arrow-in-left me-1"></i>
                        سجل دخول وانشر
                    </a>
                @endauth
            </div>

            @forelse($posts as $post)
                <article class="post-card">

                    <div class="post-header">
                        <div class="author">

                            <div class="avatar">
                                @if ($post->user->profile_image)
                                    <img src="{{ asset('storage/' . $post->user->profile_image) }}"
                                        alt="{{ $post->user->name }}">
                                @else
                                    {{ mb_substr($post->user->name, 0, 1) }}
                                @endif
                            </div>

                            <div>
                                <a href="{{ route('profile', $post->user->id) }}" class="author-name">
                                    {{ $post->user->name }}
                                </a>
                                <div class="post-date">
                                    {{ $post->created_at->format('Y/m/d - h:i A') }}
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="post-content">{{ $post->content }}</div>

                    <div class="post-footer">
                        <div class="post-footer-actions">

                            @auth
                                <form action="{{ route('posts.like', $post->id) }}" method="POST" class="like-form">
                                    @csrf

                                    <button type="submit" class="like-btn {{ $post->is_liked ?? false ? 'liked' : '' }}"
                                        {{ $post->is_liked ?? false ? 'disabled' : '' }}>

                                        <i class="bi {{ $post->is_liked ?? false ? 'bi-heart-fill' : 'bi-heart' }}"></i>

                                        {{ $post->is_liked ?? false ? 'اعجبتك' : 'اعجاب' }}

                                        <span>{{ number_format($post->likes_count) }}</span>
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="like-btn text-decoration-none">
                                    <i class="bi bi-heart"></i>
                                    اعجاب
                                    <span>{{ number_format($post->likes_count) }}</span>
                                </a>
                            @endauth

                        </div>

                        <a href="{{ route('posts.show', $post->id) }}" class="details-link">
                            عرض المنشور
                            <i class="bi bi-arrow-left me-1"></i>
                        </a>
                    </div>

                </article>

            @empty

                <div class="empty-state">
                    <i class="bi bi-chat-square-dots"></i>
                    <h3>مفيش منشورات لحد دلوقتي</h3>
                    <br />

                    @auth
                        <a href="{{ route('posts.create') }}" class="btn-main">خليك اول واحد ينشر</a>
                    @endauth
                </div>
            @endforelse

            {{ $posts->links('pagination::bootstrap-5') }}

        </div>

    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
