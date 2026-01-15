   @extends('admin.app.dashboard')
   @section('content')
       <h2 style="font-size:20px; margin-bottom:15px;">
           لیست سوالات برای درس: {{ $lesson->title }}
       </h2>

       @if ($questions->count() > 0)
           <ul style="list-style:none; padding:0;">
               @foreach ($questions as $question)
                   <li
                       style="margin-bottom:15px; padding:12px; border:1px solid #ccc; border-radius:8px; background:#fafafa;">

                       <div style="margin-bottom:6px;">
                           <strong>متن سوال:</strong>
                           {{ $question->question }}
                       </div>

                       <div style="color:gray; font-size:13px; margin-bottom:10px;">
                           <strong>تاریخ:</strong> {{ $question->created_at }}
                       </div>


                       <div style="display:flex; gap:10px;">

                           <a href="{{ route('question_edit', ['lesson' => $lesson->id, 'coursequestion' => $question->id]) }}"
                               style="background:#ffc107; color:#000; padding:6px 12px; border-radius:5px; text-decoration:none;">
                               ویرایش
                           </a>
                           <a href="{{ route('question_delete', ['lesson' => $lesson->id, 'coursequestion' => $question->id]) }}"
                               style="background:#ffc107; color:red; padding:6px 12px; border-radius:5px; text-decoration:none;">
                               حذف
                           </a>
                           <a href="{{ route('answer_create', ['coursequestion' => $question->id]) }}"
                               style="background:green; color:white; padding:6px 12px; border-radius:5px; text-decoration:none;">
                               ایجاد جواب
                           </a>
                           <a href="{{ route('question_answers', ['coursequestion' => $question->id]) }}"
                               style="background:green; color:white; padding:6px 12px; border-radius:5px; text-decoration:none;">
                               نمایش جواب ها
                           </a>



                       </div>

                   </li>
               @endforeach
           </ul>
       @else
           <p style="color:gray;">برای این درس هنوز گزارشی ثبت نشده است.</p>
       @endif
   @endsection
