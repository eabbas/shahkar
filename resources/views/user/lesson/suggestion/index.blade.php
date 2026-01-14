<h2 style="font-size:20px; margin-bottom:15px;">
    لیست پیشهناد ها برای درس: {{ $lesson->title }}
</h2>

@if ($suggestions->count() > 0)
    <ul style="list-style:none; padding:0;">
        @foreach ($suggestions as $suggestion)
            <li style="margin-bottom:15px; padding:12px; border:1px solid #ccc; border-radius:8px; background:#fafafa;">

                <div style="margin-bottom:6px;">
                    <strong>متن پیشهناد:</strong>
                    {{ $suggestion->Suggestion }}
                </div>

                <div style="color:gray; font-size:13px; margin-bottom:10px;">
                    <strong>تاریخ:</strong> {{ $suggestion->created_at }}
                </div>


                <div style="display:flex; gap:10px;">

                    <a href="{{ route('suggestion_edit', ['lesson' => $lesson->id, 'lessonsuggestion' => $suggestion->id]) }}"
                        style="background:#ffc107; color:#000; padding:6px 12px; border-radius:5px; text-decoration:none;">
                        ویرایش
                    </a>
                    <a href="{{ route('suggestion_delete', ['lesson' => $lesson->id, 'lessonsuggestion' => $suggestion->id]) }}"
                        style="background:#ffc107; color:red; padding:6px 12px; border-radius:5px; text-decoration:none;">
                        حذف
                    </a>



                </div>

            </li>
        @endforeach
    </ul>
@else
    <p style="color:gray;">برای این درس هنوز گزارشی ثبت نشده است.</p>
@endif
