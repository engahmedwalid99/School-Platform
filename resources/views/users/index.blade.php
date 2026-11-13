<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>كل الاكبادس | EL ACBADS</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --bg: #f6f4ef;
            --card: #ffffff;
            --ink: #181818;
            --muted: #84807a;
            --line: #ece8df;
            --gold: #c79a2e;
            --gold-soft: #f6ecd0;
            --gold-light: #f3c64e;
            --dark: #151515;
            --red: #e34c5b;
        }

        * {
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: var(--bg);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: var(--ink);
        }

        .page-content {
            flex: 1;
            padding: 45px 0 80px;
        }

        .page-header {
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(circle at 15% 20%, rgba(243, 198, 78, .18), transparent 45%),
                linear-gradient(135deg, #1c1c1c 0%, #0f0f0f 100%);
            color: #fff;
            border-radius: 28px;
            padding: 50px 40px;
            margin-bottom: 30px;
        }

        .page-header::before,
        .page-header::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            border: 1px solid rgba(243, 198, 78, .15);
        }

        .page-header::before {
            width: 320px;
            height: 320px;
            left: -80px;
            bottom: -170px;
        }

        .page-header::after {
            width: 200px;
            height: 200px;
            left: 10px;
            bottom: -110px;
            border-color: rgba(255, 255, 255, .06);
        }

        .header-inner {
            position: relative;
            z-index: 2;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
        }

        .page-header h1 {
            font-size: 34px;
            font-weight: 900;
            margin: 0 0 6px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .page-header h1 i {
            color: var(--gold-light);
        }

        .page-header p {
            color: #b5b0a6;
            margin: 0;
            font-size: 15px;
        }

        .users-count {
            display: flex;
            align-items: center;
            gap: 14px;
            background: rgba(255, 255, 255, .07);
            border: 1px solid rgba(255, 255, 255, .1);
            backdrop-filter: blur(6px);
            padding: 14px 24px;
            border-radius: 18px;
        }

        .users-count .num {
            font-size: 30px;
            font-weight: 900;
            color: var(--gold-light);
            line-height: 1;
        }

        .users-count .lbl {
            font-size: 13px;
            color: #cfcac0;
            font-weight: 700;
        }

        .search-wrap {
            position: relative;
            max-width: 480px;
            margin: 0 auto 38px;
        }

        .search-wrap i {
            position: absolute;
            top: 50%;
            right: 18px;
            transform: translateY(-50%);
            color: var(--gold);
            font-size: 17px;
        }

        .search-wrap input {
            width: 100%;
            border: 1px solid var(--line);
            background: #fff;
            border-radius: 16px;
            padding: 14px 48px 14px 18px;
            font-weight: 600;
            font-size: 14px;
            outline: none;
            transition: .2s;
            box-shadow: 0 4px 14px rgba(0, 0, 0, .03);
        }

        .search-wrap input:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 4px rgba(199, 154, 46, .14);
        }

        #usersGrid {
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }

        .user-col {
            animation: rise .5s ease both;
        }

        .user-card {
            position: relative;
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 25px;
            overflow: hidden;
            min-height: 440px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 0 22px 22px;
            transition: .3s ease;
        }

        .user-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 20px 40px rgba(30, 25, 10, .11);
            border-color: #e6cf8c;
        }

        .card-cover {
            width: calc(100% + 44px);
            height: 105px;
            flex-shrink: 0;
            background:
                radial-gradient(circle at 80% 0%, rgba(243, 198, 78, .4), transparent 55%),
                linear-gradient(135deg, #292929, #111);
            position: relative;
        }

        .account-badge {
            position: absolute;
            top: 14px;
            left: 15px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 6px 13px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 800;
        }

        .admin-badge {
            background: #fff0ed;
            color: #d44b36;
        }

        .user-badge {
            background: #edf3ff;
            color: #3769b2;
        }

        .user-avatar-image {
            width: 130px !important;
            height: 130px !important;
            min-width: 130px;
            border-radius: 50% !important;
            margin: -50px auto 17px;
            position: relative;
            z-index: 2;
            background: #222;
            border: 6px solid #fff;
            box-shadow: 0 0 0 3px var(--gold-soft), 0 8px 22px rgba(0, 0, 0, .14);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold-light);
            font-size: 45px;
            font-weight: 900;
            transition: .3s ease;
        }

        .user-card:hover .user-avatar {
            box-shadow: 0 0 0 3px var(--gold), 0 10px 25px rgba(0, 0, 0, .17);
        }

        .user-avatar img,
        .user-avatar span {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .user-avatar img {
            display: block;
            object-fit: cover;
        }

        .user-avatar span {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #222;
        }

        .user-details {
            width: 100%;
            margin-top: 25px;
            height: 112px;
            padding: 0 5px;
        }

        .user-name {
            font-size: 21px;
            font-weight: 900;
            margin: 0 0 7px;
            overflow-wrap: anywhere;
            color: var(--ink);
        }

        .user-position {
            color: #a1802f;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 13px;
        }

        .user-governorate {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #faf7ee;
            color: #6f6a5f;
            border: 1px solid var(--line);
            border-radius: 30px;
            padding: 6px 15px;
            font-size: 12px;
            font-weight: 700;
        }

        .user-governorate i {
            color: var(--gold);
        }

        .user-stats {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px;
            padding: 17px 8px;
            background: #fbfaf6;
            border: 1px solid var(--line);
            border-radius: 16px;
        }

        .stat-item {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .stat-item>i {
            font-size: 21px;
            color: var(--gold);
        }

        .stat-item:first-child>i {
            color: var(--red);
        }

        .stat-item div {
            display: flex;
            flex-direction: column;
            text-align: right;
            line-height: 1.4;
        }

        .stat-item strong {
            font-size: 16px;
            font-weight: 900;
        }

        .stat-item span {
            font-size: 11px;
            color: var(--muted);
            font-weight: 600;
        }

        .stat-divider {
            width: 1px;
            align-self: stretch;
            background: var(--line);
        }

        .profile-btn {
            width: 100%;
            margin-top: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 15px;
            background: var(--dark);
            color: #fff;
            text-decoration: none;
            border-radius: 13px;
            font-size: 13px;
            font-weight: 800;
            transition: .25s;
        }

        .profile-btn i {
            transition: transform .25s;
        }

        .profile-btn:hover {
            background: var(--gold);
            color: #fff;
        }

        .profile-btn:hover i {
            transform: translateX(-5px);
        }

        .empty-state,
        .no-results {
            background: #fff;
            border: 1px dashed #dcd5c2;
            border-radius: 24px;
            padding: 65px 20px;
            text-align: center;
            color: var(--muted);
        }

        .empty-state i,
        .no-results i {
            font-size: 56px;
            color: var(--gold);
        }

        .no-results {
            display: none;
            margin-top: 20px;
        }

        .pagination {
            justify-content: center;
            margin-top: 45px;
            gap: 5px;
        }

        .page-link {
            color: var(--ink);
            border: 1px solid var(--line);
            border-radius: 10px !important;
            font-weight: 700;
        }

        .page-link:hover {
            background: var(--gold-soft);
            color: var(--ink);
        }

        .active>.page-link {
            background: var(--dark);
            border-color: var(--dark);
            color: var(--gold-light);
        }

        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @media (max-width: 767px) {
            #usersGrid {
                max-width: 520px;
            }
        }

        @media (max-width: 576px) {
            .page-content {
                padding: 25px 0 55px;
            }

            .page-header {
                padding: 32px 22px;
                border-radius: 22px;
            }

            .page-header h1 {
                font-size: 26px;
            }

            .user-card {
                min-height: 420px;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content">
        <div class="container">

            <div class="page-header">
                <div class="header-inner">
                    <div>
                        <h1>
                            <i class="bi bi-people-fill"></i>
                            عيلة الاكبادس
                        </h1>
                        <p>كل الأعضاء في مكان واحد</p>
                    </div>

                    <div class="users-count">
                        <i class="bi bi-person-check-fill fs-3" style="color:#f3c64e"></i>
                        <div>
                            <div class="num">{{ number_format($users->total()) }}</div>
                            <div class="lbl">كبدس</div>
                        </div>
                    </div>
                </div>
            </div>

            @if($users->count() > 0)

                <div class="search-wrap">
                    <i class="bi bi-search"></i>
                    <input type="text" id="userSearch" placeholder="دور على كبدس بالاسم أو المحافظة..." autocomplete="off">
                </div>

                <div class="row g-4" id="usersGrid">

                    @foreach($users as $user)

                        <div class="col-lg-4 col-md-6 user-col" style="animation-delay: {{ $loop->index * 0.04 }}s"
                            data-search="{{ $user->name }} {{ $user->governorate }} {{ $user->position }}">

                            <div class="user-card">

                                <div class="card-cover">
                                    @if($user->account_type === 'admin')
                                        <span class="account-badge admin-badge">
                                            <i class="bi bi-shield-fill-check"></i>
                                            Admin
                                        </span>
                                    @else
                                        <span class="account-badge user-badge">
                                            <i class="bi bi-person-check-fill"></i>
                                            Member
                                        </span>
                                    @endif
                                </div>

                                <div class="user-avatar">
                                    @if($user->profile_image)
                                        <img class="user-avatar-image" src="{{ asset('storage/' . $user->profile_image) }}" alt="{{ $user->name }}"
                                            loading="lazy">
                                    @else
                                        <span>{{ mb_substr($user->name, 0, 1) }}</span>
                                    @endif
                                </div>

                                <div class="user-details">
                                    <h5 class="user-name">{{ $user->name }}</h5>

                                    <div class="user-position">

                                    </div>

                                    <div class="user-governorate">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        {{ $user->governorate ?: 'غير محدد' }} - {{ $user->position ?? 'عضو من الاكبادس' }}
                                    </div>
                                </div>

                                <div class="user-stats">
                                    <div class="stat-item">
                                        <i class="bi bi-heart-fill"></i>
                                        <div>
                                            <strong>{{ number_format($user->likes_count ?? 0) }}</strong>
                                            <span>اعجاب</span>
                                        </div>
                                    </div>

                                    <div class="stat-divider"></div>

                                    <div class="stat-item">
                                        <i class="bi bi-calendar3"></i>
                                        <div>
                                            <strong>{{ $user->created_at->format('Y') }}</strong>
                                            <span>سنة الانضمام</span>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ url('/profile/' . $user->id) }}" class="profile-btn">
                                    <span>عرض البروفايل</span>
                                    <i class="bi bi-arrow-left"></i>
                                </a>

                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="no-results" id="noResults">
                    <i class="bi bi-search-heart"></i>
                    <h5 class="fw-bold mt-3">مفيش حد بالاسم ده</h5>
                    <p class="mb-0">جرب كلمة تانية</p>
                </div>

                {{ $users->links('pagination::bootstrap-5') }}

            @else

                <div class="empty-state">
                    <i class="bi bi-people"></i>
                    <h5 class="fw-bold mt-3">لسه مفيش اعضاء</h5>
                    <p>واضح ان الاكبادس لسه في الطريق 😂</p>
                </div>

            @endif

        </div>
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function () {
            var input = document.getElementById('userSearch');

            if (!input) return;

            var cols = document.querySelectorAll('#usersGrid .user-col');
            var empty = document.getElementById('noResults');

            input.addEventListener('input', function () {
                var q = input.value.trim().toLowerCase();
                var visible = 0;

                cols.forEach(function (col) {
                    var match = col.dataset.search.toLowerCase().indexOf(q) !== -1;

                    col.style.display = match ? '' : 'none';

                    if (match) visible++;
                });

                empty.style.display = visible === 0 ? 'block' : 'none';
            });
        })();
    </script>

</body>

</html>
