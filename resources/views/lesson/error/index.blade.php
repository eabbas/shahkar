<h2 style="font-size:20px; margin-bottom:15px;">
    لیست خطا ها  برای درس: {{ $lesson->title }}
</h2>

@if($lessoErrors->count() > 0)
    <ul style="list-style:none; padding:0;">
        @foreach($lessoErrors as $error)
            <li style="margin-bottom:15px; padding:12px; border:1px solid #ccc; border-radius:8px; background:#fafafa;">

                <div style="margin-bottom:6px;">
                    <strong>متن خطا:</strong>
                    {{ $error->error }}
                </div>
                <div style="margin-bottom:6px;">
                    <strong>نوع خطا:</strong>
                    {{ $error->errortitle -> title }}
                </div>

                <div style="color:gray; font-size:13px; margin-bottom:10px;">
                    <strong>تاریخ:</strong> {{ $error->created_at }}
                </div>


                <div style="display:flex; gap:10px;">

                    <a href="{{ route('error_edit',['lesson'=>$lesson->id ,'error' => $error -> id]) }}"
                        style="background:#ffc107; color:#000; padding:6px 12px; border-radius:5px; text-decoration:none;">
                        ویرایش
                    </a>
                    <a href="{{ route('error_delete',['lesson'=>$lesson->id ,'error' => $error -> id]) }}"
                        style="background:#ffc107; color:red; padding:6px 12px; border-radius:5px; text-decoration:none;">
                        حذف
                    </a>

                  

                </div>

            </li>
        @endforeach
    </ul>
@else
    <p style="color:gray;">برای این درس هنوز خطایی ثبت نشده است.</p>
@endif
