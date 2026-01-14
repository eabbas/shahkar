<style>
    .action-box {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }

    .action-box a {
        padding: 6px 12px;
        font-size: 13px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        transition: .2s;
        border: 1px solid transparent;
    }

    .action-blue {
        background: #e8f0ff;
        color: #0056d2;
    }

    .action-red {
        background: #ffe8e8;
        color: #d40000;
    }

    .action-gray {
        background: #f2f2f2;
        color: #555;
    }

    .action-green {
        background: #e7ffe8;
        color: #0f8b26;
    }

    .action-brown {
        background: #f5e7da;
        color: #8b4513;
    }

    .action-teal {
        background: #e3fffd;
        color: #00796b;
    }

    .action-box a:hover {
        opacity: 0.8;
        transform: translateY(-2px);
    }

    /* موبایل */
    @media (max-width: 600px) {
        .action-box a {
            width: 100%;
            text-align: center;
        }
    }
</style>

@extends('admin.app.dashboard')
@section('content')
    <div style="max-width:900px; margin:auto; padding:20px; font-family:sans-serif;">

        <h2 style="font-size:24px; margin-bottom:20px;">لیست درس‌ها</h2>

        @forelse($lessons as $lesson)
            <div
                style="
            background:#fff;
            margin-bottom:20px;
            padding:20px;
            border-radius:14px;
            box-shadow:0 4px 12px rgba(0,0,0,0.08);
        ">

                <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap;">
                    <h3 style="font-size:20px; margin:0; color:#333;">
                        {{ $lesson->title }}
                    </h3>

                    <span
                        style="
                    background:#f1f1f1;
                    padding:6px 12px;
                    border-radius:6px;
                    font-size:12px;
                ">
                        ID: {{ $lesson->id }}
                    </span>
                </div>

                <p style="margin:10px 0; color:#555; font-size:14px;">
                    {{ $lesson->description }}
                </p>

                <div style="display:flex; gap:20px; flex-wrap:wrap; margin:10px 0;">
                    <div style="font-size:14px; color:#333;">
                        <strong>قیمت:</strong> {{ number_format($lesson->price, 0) }} تومان
                    </div>

                    <div style="font-size:14px;">
                        <strong>رایگان:</strong>
                        <span>{{ $lesson->free ? '✅ بله' : '❌ خیر' }}</span>
                    </div>

                    <div style="font-size:14px;">
                        <strong>مدت زمان :</strong> {{ $lesson->duration }}
                    </div>

                    <div style="font-size:14px;">
                        <strong>ترتیب:</strong> {{ $lesson->order }}
                    </div>

                    @if ($lesson->video_path)
                        <div style="margin:10px 0;">
                            <video width="320" controls style="border-radius:8px;">
                                <source src="{{ asset('storage/' . $lesson->video_path) }}">
                            </video>
                        </div>
                    @endif


                </div>

                <hr style="margin:15px 0; border-color:#eee;">

                <div class="action-box">

                    <a href="{{ route('lesson_edit', $lesson->id) }}" class="action-blue">ویرایش</a>
                    <a href="{{ route('lesson_adminShow', $lesson->id) }}" class="action-green">سینگل</a>

                    <a href="{{ route('lesson_delete', $lesson->id) }}" class="action-red">حذف</a>

                    <a href="{{ route('lesson_attachfile', $lesson->id) }}" class="action-gray">فایل پیوست ایجاد</a>
                    <a href="{{ route('lesson_attachments', $lesson->id) }}" class="action-gray">نمایش پیوست ها</a>

                    <a href="{{ route('lessonComments_create', $lesson->id) }}" class="action-green">افزودن نظر</a>

                    <a href="{{ route('lessonComments_index', $lesson->id) }}" class="action-green">نظرات</a>

                    <a href="{{ route('error_create', $lesson->id) }}" class="action-red">گزارش خطا</a>

                    <a href="{{ route('lesson_errors', $lesson->id) }}" class="action-red">نمایش خطاها</a>

                    <a href="{{ route('suggestion_create', $lesson->id) }}" class="action-teal">ایجاد پیشنهاد</a>

                    <a href="{{ route('lesson_suggestions', $lesson->id) }}" class="action-green">نمایش پیشنهادها</a>

                    <a href="{{ route('question_create', $lesson->id) }}" class="action-brown">ایجاد سوال</a>

                    <a href="{{ route('lesson_questions', $lesson->id) }}" class="action-blue">نمایش همه سوال</a>

                </div>

            </div>

        @empty
            <p
                style="text-align:center; padding:20px; background:#fff; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.05);">
                هیچ درسی ثبت نشده است.
            </p>
        @endforelse

    </div>
@endsection
