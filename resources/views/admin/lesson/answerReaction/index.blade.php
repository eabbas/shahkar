@extends('admin.app.dashboard')
@section('content')
    <div
        style="
    max-width:900px;
    margin:40px auto;
    padding:20px;
    background:#ffffff;
    border-radius:12px;
    border:1px solid #e5e7eb;
    box-shadow:0 3px 8px rgba(0,0,0,0.05);
">

        <h2
            style="
        font-size:24px;
        text-align:center;
        font-weight:bold;
        margin-bottom:20px;
        color:#333;
    ">
            {{ $answer->answer }}لیست واکنش‌ها (Likes / Dislikes)
        </h2>

        @if ($reactions->count() > 0)
            <table style="width:100%; border-collapse:collapse; font-size:16px;">
                <thead>
                    <tr style="background:#f1f5f9; text-align:center;">
                        <th style="padding:10px; border:1px solid #e5e7eb;">ID</th>
                        <th style="padding:10px; border:1px solid #e5e7eb;">User Name</th>
                        <th style="padding:10px; border:1px solid #e5e7eb;">Reaction</th>
                        <th style="padding:10px; border:1px solid #e5e7eb;">Created At</th>
                        <th style="padding:10px; border:1px solid #e5e7eb;">Updated At</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($reactions as $reaction)
                        <tr style="text-align:center; background:#ffffff;">
                            <td style="padding:10px; border:1px solid #e5e7eb;">
                                {{ $reaction->id }}
                            </td>

                            <td style="padding:10px; border:1px solid #e5e7eb;">
                                {{ $reaction->user->name }}
                            </td>

                            <td style="padding:10px; border:1px solid #e5e7eb;">
                                @if ($reaction->reaction == 1)
                                    👍 لایک
                                @elseif($reaction->reaction == -1)
                                    👎 دیسلایک
                                @else
                                    ❌ بدون واکنش
                                @endif
                            </td>

                            <td style="padding:10px; border:1px solid #e5e7eb;">
                                {{ $reaction->created_at }}
                            </td>

                            <td style="padding:10px; border:1px solid #e5e7eb;">
                                {{ $reaction->updated_at }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p style="text-align:center; padding:20px; color:#666;">
                هیچ واکنشی ثبت نشده است.
            </p>
        @endif

    </div>
@endsection
