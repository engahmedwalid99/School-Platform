
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data->name }} | EL ACBADS</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
            overflow-x: hidden;
        }

        .page-content {
            flex: 1;
            padding: 40px 15px 55px;
            width: 100%;
        }

        .profile-container {
            max-width: 950px;
            width: 100%;
            margin: auto;
        }

        .profile-card {
            background: #fff;
            border: 1px solid #e9e9e9;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .035);
        }

        .profile-cover {
            height: 190px;
            background: linear-gradient(120deg, #242424, #49443a, #9a8765);
            position: relative;
            overflow: hidden;
        }

        .profile-cover::before,
        .profile-cover::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 50%;
        }

        .profile-cover::before {
            width: 300px;
            height: 300px;
            top: -190px;
            right: 10%;
        }

        .profile-cover::after {
            width: 230px;
            height: 230px;
            bottom: -170px;
            left: 12%;
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
            z-index: 2;
            flex-wrap: wrap;
        }

        .profile-avatar {
            width: 135px;
            height: 135px;
            border-radius: 50%;
            overflow: hidden;
            background: #292929;
            border: 5px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #c4b596;
            font-size: 55px;
            font-weight: 800;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .1);
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
            padding: 8px 14px;
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
            font-size: 26px;
            font-weight: 900;
            margin: 17px 0 5px;
            overflow-wrap: anywhere;
        }

        .profile-position {
            color: #9a8765;
            font-size: 13px;
            font-weight: 800;
            overflow-wrap: anywhere;
        }

        .profile-location {
            color: #888;
            font-size: 12px;
            margin-top: 9px;
        }

        .profile-location i {
            color: #9a8765;
        }

        .profile-actions {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
        }

        .edit-toggle-btn {
            border: 0;
            background: #292929;
            color: #fff;
            border-radius: 9px;
            padding: 10px 17px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            transition: .2s;
        }

        .edit-toggle-btn:hover {
            background: #9a8765;
            color: #fff;
        }

        .profile-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin-top: 28px;
        }

        .stat-box {
            background: #faf9f6;
            border: 1px solid #eeeae2;
            border-radius: 11px;
            padding: 18px 10px;
            text-align: center;
            min-width: 0;
            transition: .2s;
        }

        .stat-box:hover {
            background: #f5f1e8;
            transform: translateY(-2px);
        }

        .stat-box i {
            color: #9a8765;
            font-size: 20px;
        }

        .stat-number {
            display: block;
            font-size: 22px;
            font-weight: 900;
            margin-top: 5px;
            overflow-wrap: anywhere;
        }

        .stat-label {
            color: #888;
            font-size: 11px;
            display: block;
        }

        .edit-profile-card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 14px;
            padding: 25px;
            margin-top: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .025);
        }

        .edit-profile-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 22px;
        }

        .edit-profile-title i {
            color: #9a8765;
            font-size: 23px;
        }

        .edit-profile-title h5 {
            font-size: 16px;
            font-weight: 900;
            margin: 0;
        }

        .edit-profile-card .form-control,
        .edit-profile-card .form-select {
            min-height: 46px;
            border-radius: 9px;
            border-color: #e5e5e5;
            box-shadow: none;
            font-family: inherit;
            font-size: 13px;
        }

        .edit-profile-card .form-control:focus,
        .edit-profile-card .form-select:focus {
            border-color: #b5a17d;
            box-shadow: 0 0 0 3px rgba(154, 135, 101, .1);
        }

        .edit-profile-card .form-label {
            font-size: 13px;
            font-weight: 700;
        }

        .edit-image-preview {
            width: 115px;
            height: 115px;
            border-radius: 50%;
            background: #292929;
            color: #c4b596;
            border: 4px solid #f1eee7;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 45px;
        }

        .edit-image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .choose-image-btn {
            background: #f7f5f0;
            color: #786644;
            border: 1px solid #eee8dc;
            border-radius: 8px;
            font-weight: 700;
            font-size: 12px;
            padding: 9px 14px;
        }

        .choose-image-btn:hover {
            background: #eee8dc;
            color: #292929;
        }

        .save-profile-btn {
            background: #292929;
            color: #fff;
            border-radius: 9px;
            padding: 12px;
            font-family: inherit;
            font-weight: 700;
            font-size: 13px;
        }

        .save-profile-btn:hover {
            background: #9a8765;
            color: #fff;
        }

        .cancel-edit-btn {
            background: #f3f3f3;
            color: #555;
            border: 1px solid #e5e5e5;
            border-radius: 9px;
            padding: 12px;
            font-family: inherit;
            font-weight: 700;
            font-size: 13px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 900;
            margin: 35px 0 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-title i {
            color: #9a8765;
        }

        .post-card {
            background: #fff;
            border: 1px solid #eaeaea;
            border-radius: 13px;
            padding: 20px;
            margin-bottom: 13px;
            transition: .2s;
            min-width: 0;
        }

        .post-card:hover {
            border-color: #ddd4c3;
        }

        .post-author-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f3f0e9;
            color: #9a8765;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
        }

        .post-author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .post-content {
            font-size: 13px;
            line-height: 2;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
            color: #444;
        }

        .post-date {
            color: #999;
            font-size: 11px;
            margin-top: 15px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .post-date i {
            color: #c16b76;
        }

        .empty-posts {
            background: #fff;
            border: 1px dashed #ddd;
            border-radius: 13px;
            padding: 35px 15px;
            text-align: center;
            color: #999;
            font-size: 13px;
        }

        .empty-posts i {
            display: block;
            font-size: 32px;
            margin-bottom: 10px;
            color: #b5a17d;
        }

        .alert {
            font-size: 13px;
        }

        @media (max-width: 768px) {
            .page-content {
                padding: 25px 12px 40px;
            }

            .profile-cover {
                height: 145px;
            }

            .profile-main {
                padding: 0 20px 24px;
            }

            .profile-header {
                align-items: center;
                flex-direction: column;
                gap: 12px;
                margin-top: -58px;
            }

            .profile-avatar {
                width: 115px;
                height: 115px;
                font-size: 42px;
            }

            .profile-header > div:last-child {
                margin-bottom: 0 !important;
                text-align: center;
            }

            .profile-name {
                font-size: 22px;
                text-align: center;
                margin-top: 15px;
            }

            .profile-position,
            .profile-location {
                text-align: center;
            }

            .profile-actions {
                justify-content: center;
                margin-top: 15px;
            }

            .edit-toggle-btn {
                width: 100%;
                max-width: 250px;
                padding: 11px 15px;
            }

            .profile-stats {
                gap: 8px;
                margin-top: 22px;
            }

            .stat-box {
                padding: 14px 5px;
            }

            .stat-box i {
                font-size: 18px;
            }

            .stat-number {
                font-size: 18px;
            }

            .stat-label {
                font-size: 10px;
                line-height: 1.7;
            }

            .edit-profile-card {
                padding: 20px 16px;
            }

            .section-title {
                font-size: 16px;
                margin-top: 28px;
            }

            .post-card {
                padding: 16px;
            }
        }

        @media (max-width: 400px) {
            .page-content {
                padding: 18px 9px 30px;
            }

            .profile-cover {
                height: 125px;
            }

            .profile-main {
                padding: 0 13px 20px;
            }

            .profile-avatar {
                width: 100px;
                height: 100px;
                font-size: 36px;
            }

            .profile-name {
                font-size: 20px;
            }

            .account-badge {
                font-size: 10px;
                padding: 6px 11px;
            }

            .profile-stats {
                gap: 5px;
            }

            .stat-box {
                padding: 12px 3px;
            }

            .stat-number {
                font-size: 16px;
            }

            .stat-label {
                font-size: 9px;
            }

            .edit-profile-card {
                padding: 16px 12px;
            }

            .edit-profile-title h5 {
                font-size: 14px;
            }

            .edit-image-preview {
                width: 100px;
                height: 100px;
            }

            .section-title {
                font-size: 15px;
            }

            .post-card {
                padding: 14px 12px;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content">
        <div class="profile-container">

            @if(session('success'))
                <div class="alert alert-success rounded-3 mb-3">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger rounded-3 mb-3">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="profile-card">
                <div class="profile-cover"></div>

                <div class="profile-main">

                    <div class="profile-header">

                        <div class="profile-avatar">
                            @if($data->profile_image && Storage::disk('public')->exists($data->profile_image))
                                <img src="{{ asset('storage/' . $data->profile_image) }}" alt="{{ $data->name }}">
                            @else
                                <span>{{ mb_substr($data->name, 0, 1) }}</span>
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

                    @auth
                        @if(auth()->id() === $data->id)
                            <div class="profile-actions">
                                <button type="button" class="edit-toggle-btn" id="editProfileToggle">
                                    <i class="bi bi-pencil-square me-1"></i>
                                    تعديل البروفايل
                                </button>
                            </div>
                        @endif
                    @endauth

                    <div class="profile-stats">

                        <div class="stat-box">
                            <i class="bi bi-file-post"></i>
                            <span class="stat-number">{{ $data->posts->count() }}</span>
                            <span class="stat-label">المنشورات</span>
                        </div>

                        <div class="stat-box">
                            <i class="bi bi-heart-fill"></i>
                            <span class="stat-number">{{ number_format($data->likes_count ?? 0) }}</span>
                            <span class="stat-label">اعجابات الحساب</span>
                        </div>

                        <div class="stat-box">
                            <i class="bi bi-calendar-check"></i>
                            <span class="stat-number">{{ $data->created_at?->format('Y') ?? '-' }}</span>
                            <span class="stat-label">سنة الانضمام</span>
                        </div>

                    </div>

                </div>
            </div>

            @auth
                @if(auth()->id() === $data->id)

                    <div class="edit-profile-card" id="editProfileCard" style="display:none;">

                        <div class="edit-profile-title">
                            <i class="bi bi-pencil-square"></i>
                            <h5>تعديل بيانات البروفايل</h5>
                        </div>

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="text-center mb-4">

                                <div class="edit-image-preview mx-auto mb-3">
                                    <img id="imagePreview"
                                        src="{{ $data->profile_image ? asset('storage/' . $data->profile_image) : '' }}"
                                        alt="صورة البروفايل" @if(!$data->profile_image) style="display:none" @endif>

                                    <i class="bi bi-person-fill" id="defaultImageIcon" @if($data->profile_image)
                                    style="display:none" @endif></i>
                                </div>

                                <label for="profile_image" class="btn choose-image-btn">
                                    <i class="bi bi-camera-fill me-1"></i>
                                    اختار صورة جديدة
                                </label>

                                <input type="file" name="profile_image" id="profile_image" class="d-none"
                                    accept="image/png,image/jpeg,image/webp">

                                <small class="d-block text-muted mt-2">
                                    JPG او PNG او WEBP - بحد اقصى 2 ميجا
                                </small>

                            </div>

                            <div class="mb-3">
                                <label class="form-label">الاسم</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $data->name) }}" required minlength="3" maxlength="100">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">البريد الالكتروني</label>
                                <input type="email" class="form-control" value="{{ $data->email }}" disabled>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">المحافظة</label>

                                @php
                                    $governorates = [
                                        'القاهرة',
                                        'الجيزة',
                                        'الاسكندرية',
                                        'الدقهلية',
                                        'البحر الاحمر',
                                        'البحيرة',
                                        'الفيوم',
                                        'الغربية',
                                        'الاسماعيلية',
                                        'المنوفية',
                                        'المنيا',
                                        'القليوبية',
                                        'الوادي الجديد',
                                        'السويس',
                                        'اسوان',
                                        'اسيوط',
                                        'بني سويف',
                                        'بورسعيد',
                                        'دمياط',
                                        'الشرقية',
                                        'جنوب سيناء',
                                        'كفر الشيخ',
                                        'مطروح',
                                        'الاقصر',
                                        'قنا',
                                        'شمال سيناء',
                                        'سوهاج'
                                    ];
                                @endphp

                                <select name="governorate" class="form-select" required>
                                    <option value="">اختار المحافظة</option>

                                    @foreach($governorates as $governorate)
                                        <option value="{{ $governorate }}" @selected(old('governorate', $data->governorate) === $governorate)>
                                            {{ $governorate }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex flex-column flex-sm-row gap-2">
                                <button type="submit" class="btn save-profile-btn flex-fill">
                                    <i class="bi bi-check2-circle me-1"></i>
                                    حفظ التعديلات
                                </button>

                                <button type="button" class="btn cancel-edit-btn flex-fill" id="cancelEdit">
                                    الغاء
                                </button>
                            </div>

                        </form>
                    </div>

                @endif
            @endauth

            <h2 class="section-title">
                <i class="bi bi-chat-square-text"></i>
                منشورات {{ $data->name }}
            </h2>

            @forelse($data->posts as $post)

                <div class="post-card">

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="post-author-avatar">
                            @if($data->profile_image)
                                <img src="{{ asset('storage/' . $data->profile_image) }}" alt="{{ $data->name }}">
                            @else
                                <i class="bi bi-person-fill"></i>
                            @endif
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
                        <i class="bi bi-heart-fill"></i>
                        {{ number_format($post->likes_count ?? 0) }} اعجاب
                    </div>

                </div>

            @empty

                <div class="empty-posts">
                    <i class="bi bi-chat-square-dots"></i>
                    لسه مفيش منشورات هنا يا كبدس
                    <div class="mt-2">انشر تبضينتك وتعالي هتلاقيها جت قبلك</div>
                </div>

            @endforelse

        </div>
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButton = document.getElementById('editProfileToggle');
            const editCard = document.getElementById('editProfileCard');
            const cancelButton = document.getElementById('cancelEdit');
            const input = document.getElementById('profile_image');
            const preview = document.getElementById('imagePreview');
            const defaultIcon = document.getElementById('defaultImageIcon');

            if (editButton && editCard) {
                editButton.addEventListener('click', function () {
                    const isHidden = editCard.style.display === 'none';

                    editCard.style.display = isHidden ? 'block' : 'none';

                    if (isHidden) {
                        editCard.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            }

            if (cancelButton && editCard) {
                cancelButton.addEventListener('click', function () {
                    editCard.style.display = 'none';

                    if (editButton) {
                        editButton.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                });
            }

            if (input) {
                input.addEventListener('change', function () {
                    const file = this.files[0];

                    if (!file) return;

                    if (!['image/jpeg', 'image/png', 'image/webp'].includes(file.type)) {
                        alert('اختار صورة بصيغة JPG او PNG او WEBP');
                        this.value = '';
                        return;
                    }

                    if (file.size > 2 * 1024 * 1024) {
                        alert('حجم الصورة لازم يكون اقل من 2 ميجا');
                        this.value = '';
                        return;
                    }

                    const reader = new FileReader();

                    reader.onload = function (event) {
                        preview.src = event.target.result;
                        preview.style.display = 'block';
                        defaultIcon.style.display = 'none';
                    };

                    reader.readAsDataURL(file);
                });
            }
        });
    </script>

</body>

</html>
