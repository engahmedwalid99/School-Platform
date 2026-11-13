<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل المنشور | EL ACBADS</title>

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

        .details-container {
            max-width: 800px;
            margin: 45px auto;
        }

        .back-link {
            color: #777;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 18px;
        }

        .post-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 16px;
            padding: 27px;
        }

        .post-header {
            display: flex;
            align-items: center;
            gap: 13px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .avatar {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            overflow: hidden;
            background: #f0ece4;
            color: #927744;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            font-weight: 900;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-name {
            color: #222;
            text-decoration: none;
            font-size: 14px;
            font-weight: 900;
        }

        .post-date {
            color: #999;
            font-size: 11px;
            margin-top: 4px;
        }

        .post-content {
            padding: 25px 0;
            color: #444;
            font-size: 15px;
            line-height: 2.2;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
        }

        .post-footer {
            border-top: 1px solid #eee;
            padding-top: 17px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .likes {
            color: #888;
            font-size: 13px;
        }

        .likes i {
            color: #b76a6a;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn-edit,
        .btn-delete {
            border: 0;
            border-radius: 8px;
            padding: 9px 13px;
            font-size: 11px;
            font-weight: 800;
            text-decoration: none;
        }

        .btn-edit {
            background: #f4f0e7;
            color: #927744;
        }

        .btn-delete {
            background: #fff0f0;
            color: #c04b4b;
        }

        .alert {
            border: 0;
            font-size: 13px;
        }

        @media (max-width: 576px) {
            .post-card {
                padding: 18px;
            }

            .post-footer {
                align-items: flex-start;
                flex-direction: column;
            }

            .details-container {
                margin: 25px auto;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content container">

        <div class="details-container">

            <a href="{{ route('posts.index') }}" class="back-link">
                <i class="bi bi-arrow-right me-1"></i>
                كل المنشورات
            </a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <article class="post-card">

                <div class="post-header">

                    <div class="avatar">
                        @if($post->user->profile_image)
                            <img src="{{ asset('storage/' . $post->user->profile_image) }}" alt="{{ $post->user->name }}">
                        @else
                            {{ mb_substr($post->user->name, 0, 1) }}
                        @endif
                    </div>

                    <div>
                        <a href="" class="author-name">
                            {{ $post->user->name }}
                        </a>

                        <div class="post-date">
                            {{ $post->created_at->format('Y/m/d - h:i A') }}
                        </div>
                    </div>

                </div>

                <div class="post-content">{{ $post->content }}</div>

                <div class="post-footer">

                    <div class="likes">
                        <i class="bi bi-heart-fill"></i>
                        {{ number_format($post->likes_count) }} إعجاب
                    </div>

                    @auth
                        @if(auth()->id() === $post->user_id || auth()->user()->isAdmin())
                            <div class="actions">

                                <a href="{{ route('posts.edit', $post->id) }}" class="btn-edit">
                                    <i class="bi bi-pencil-square"></i>
                                    تعديل
                                </a>

                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                    onsubmit="return confirm('متأكد انك عايز تحذف المنشور؟');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-delete">
                                        <i class="bi bi-trash"></i>
                                        حذف
                                    </button>
                                </form>

                            </div>
                        @endif
                    @endauth

                </div>

            </article>

        </div>

    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
