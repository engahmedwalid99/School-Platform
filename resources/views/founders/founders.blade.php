<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مؤسسو الاكبادس | EL ACBADS</title>

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
            color: #202124;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .page-content {
            flex: 1;
        }

        .founders-hero {
            background: #171717;
            color: #fff;
            padding: 75px 20px 85px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .founders-hero::before {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            background: rgba(255, 255, 255, 0.035);
            border-radius: 50%;
            top: -180px;
            right: -80px;
        }

        .founders-hero::after {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            background: rgba(255, 255, 255, 0.035);
            border-radius: 50%;
            bottom: -150px;
            left: -60px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-icon {
            width: 75px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 22px;
            background: #292929;
            border: 1px solid #414141;
            border-radius: 22px;
            font-size: 34px;
            color: #d9c49b;
        }

        .founders-hero h1 {
            font-size: 38px;
            font-weight: 900;
            margin-bottom: 14px;
        }

        .founders-hero p {
            color: #bdbdbd;
            font-size: 15px;
            max-width: 550px;
            margin: auto;
            line-height: 2;
        }

        .stats-wrapper {
            margin-top: -35px;
            position: relative;
            z-index: 2;
        }

        .stat-card {
            background: #fff;
            border: 1px solid #eeeeee;
            border-radius: 15px;
            padding: 22px 15px;
            text-align: center;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.035);
        }

        .stat-icon {
            width: 45px;
            height: 45px;
            background: #f4f1e9;
            color: #9c8150;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            margin: 0 auto 12px;
            font-size: 20px;
        }

        .stat-card h3 {
            font-size: 25px;
            font-weight: 900;
            margin-bottom: 4px;
        }

        .stat-card span {
            font-size: 12px;
            color: #888;
            font-weight: 600;
        }

        .section-heading {
            margin-bottom: 30px;
        }

        .section-heading h2 {
            font-size: 25px;
            font-weight: 900;
            margin-bottom: 8px;
        }

        .section-heading p {
            color: #888;
            font-size: 13px;
            margin: 0;
        }

        .founder-card {
            background: #fff;
            border: 1px solid #ededed;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;
            transition: 0.25s ease;
        }

        .founder-card:hover {
            transform: translateY(-5px);
            border-color: #d8c8a7;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.07);
        }

        .founder-cover {
            height: 115px;
            background: #222;
            position: relative;
        }

        .founder-cover::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, .04), transparent);
        }

        .founder-avatar {
            width: 105px;
            height: 105px;
            border-radius: 50%;
            border: 5px solid #fff;
            background: #f0ece4;
            margin: -55px auto 12px;
            position: relative;
            z-index: 1;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9c8150;
            font-size: 40px;
            font-weight: 900;
        }

        .founder-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .founder-info {
            padding: 0 20px 22px;
            text-align: center;
        }

        .founder-name {
            font-size: 18px;
            font-weight: 900;
            margin-bottom: 9px;
            color: #222;
        }

        .founder-position {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #f5f1e8;
            color: #927744;
            padding: 6px 13px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 17px;
        }

        .founder-details {
            display: flex;
            justify-content: center;
            gap: 20px;
            border-top: 1px solid #f0f0f0;
            padding-top: 15px;
            margin-bottom: 17px;
        }

        .founder-detail {
            color: #777;
            font-size: 12px;
        }

        .founder-detail i {
            color: #a58a5a;
            margin-left: 4px;
        }

        .profile-link {
            display: block;
            text-decoration: none;
            background: #202020;
            color: #fff;
            border-radius: 9px;
            padding: 10px;
            font-size: 12px;
            font-weight: 700;
            transition: 0.2s;
        }

        .profile-link:hover {
            background: #9c8150;
            color: #fff;
        }

        .empty-state {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 18px;
            padding: 55px 20px;
            text-align: center;
        }

        .empty-state i {
            font-size: 55px;
            color: #c5b28e;
            display: block;
            margin-bottom: 18px;
        }

        .empty-state h3 {
            font-size: 20px;
            font-weight: 900;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: #888;
            font-size: 13px;
            margin: 0;
        }

        .bottom-note {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 14px;
            padding: 22px;
            text-align: center;
            margin-top: 45px;
        }

        .bottom-note p {
            margin: 0;
            color: #777;
            font-size: 13px;
            line-height: 2;
        }

        @media (max-width: 576px) {
            .founders-hero {
                padding: 55px 15px 75px;
            }

            .founders-hero h1 {
                font-size: 27px;
            }

            .section-heading h2 {
                font-size: 21px;
            }

            .stats-wrapper {
                margin-top: -25px;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content">

        <section class="founders-hero">
            <div class="hero-content">
                <div class="hero-icon">
                    <i class="bi bi-award"></i>
                </div>

                <h1>مؤسسو الاكبادس</h1>

                <p>
                    يتم تحديد المؤسس من الاداره ومدي التحميص علي العيال فالمدرسه يكبدس
                </p>
            </div>
        </section>

        <div class="container stats-wrapper">
            <div class="row g-3">

                <div class="col-6 col-lg-4">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3>{{ $foundersCount }}</h3>
                        <span>عدد المؤسسين</span>
                    </div>
                </div>

                <div class="col-6 col-lg-4">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h3>{{ number_format($totalLikes) }}</h3>
                        <span>إجمالي اللايكات</span>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <h3>{{ number_format($totalPosts) }}</h3>
                        <span>إجمالي المنشورات</span>
                    </div>
                </div>

            </div>
        </div>

        <section class="container py-5">

            <div class="section-heading text-center">
                <h2>الناس اللي حمصت أكتر </h2>
            </div>

            @if($founders->count() > 0)

                <div class="row g-4">

                    @foreach($founders as $founder)

                        <div class="col-sm-6 col-lg-4 col-xl-3">

                            <div class="founder-card">

                                <div class="founder-cover"></div>

                                <div class="founder-avatar">

                                    @if($founder->profile_image)
                                        <img src="{{ asset('storage/' . $founder->profile_image) }}" alt="{{ $founder->name }}">
                                    @else
                                        {{ mb_substr($founder->name, 0, 1) }}
                                    @endif

                                </div>

                                <div class="founder-info">

                                    <h3 class="founder-name">
                                        {{ $founder->name }}
                                    </h3>

                                    <div class="founder-position">
                                        <i class="bi bi-patch-check-fill"></i>
                                        {{ $founder->position }}
                                    </div>

                                    <div class="founder-details">

                                        <div class="founder-detail">
                                            <i class="bi bi-heart-fill"></i>
                                            {{ number_format($founder->likes_count) }} لايك
                                        </div>

                                        <div class="founder-detail">
                                            <i class="bi bi-file-text"></i>
                                            {{ number_format($founder->posts_count) }} منشور
                                        </div>

                                    </div>

                                    <a href="{{ route('founders.show', $founder->id) }}" class="profile-link">
                                        عرض الكبدس
                                        <i class="bi bi-arrow-left me-1"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="empty-state">
                    <i class="bi bi-emoji-neutral"></i>
                    <h3>لسه محدش اتسجل كمؤسس!</h3>
                    <p>
                        واضح إن محدش عايز يعترف بالمسؤولية عن اللي بيحصل هنا
                        لما الادمن يحدد منصب المؤسس هتظهر الحسابات هنا.
                    </p>
                </div>

            @endif

            <div class="bottom-note">
                <p>
                    <i class="bi bi-info-circle me-1"></i>
                    المنصب بيتحدد من الادارة، مش من المستخدم نفسه.
                    يعني مش كل واحد يصحى الصبح يقرر يبقى مؤسس
                </p>
            </div>

        </section>

    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
