<h2 style="
    font-size:24px; 
    margin-bottom:25px; 
    text-align:center;
    font-weight:bold;
    color:#222;
">
    لیست پاسخ‌ها برای سؤال:  
    <span style="color:#007bff;">{{ $question->question }}</span>
    <div style="font-size:16px; margin-top:6px; color:#777;">
        درس: {{ $question->lesson->tilt }}
    </div>
</h2>

@if($answers->count() > 0)
    <ul style="list-style:none; padding:0; max-width:900px; margin:0 auto;">

        @foreach($answers as $answer)
            @if($answer->parent_id == 0)

            <li style="
                margin-bottom:25px; 
                padding:20px; 
                border:1px solid #e5e7eb; 
                border-radius:12px; 
                background:#ffffff; 
                box-shadow:0 3px 8px rgba(0,0,0,0.05);
                transition:0.2s;
            ">

                {{-- متن جواب اصلی --}}
                <div style="margin-bottom:12px; font-size:16px; line-height:1.8; color:#333;">
                    <strong>پاسخ:</strong>
                    <div style="margin-top:6px; background:#f9fafb; padding:12px; border-radius:8px;">
                        {{ $answer->answer }}
                    </div>
                </div>

                {{-- جواب‌های فرزند --}}
                @php $children = $answer->children; @endphp

                @foreach($children as $child)
                <div style="
                    margin-top:15px;
                    margin-left:30px;
                    padding:15px;
                    border-left:4px solid #007bff;
                    background:#f0f6ff;
                    border-radius:8px;
                    font-size:15px;
                    line-height:1.7;
                ">
                    <strong style="color:#333;">پاسخ به این پاسخ:</strong>
                    <div style="margin-top:6px; background:#fff; padding:10px; border-radius:6px;">
                        {{ $child->answer }}
                    </div>

                    {{-- دکمه‌ها --}}
                    <div style="margin-top:12px; display:flex; gap:10px;">
                        <a href="{{ route('answer_edit',['answer' => $child->id]) }}"
                            style="background:#ffe08a; color:#000; padding:6px 12px; border-radius:6px; text-decoration:none; font-size:14px;">
                            ویرایش
                        </a>

                        <a href="{{ route('answer_delete',['answer' => $child->id]) }}"
                            style="background:#ffcece; color:#c40000; padding:6px 12px; border-radius:6px; text-decoration:none; font-size:14px;">
                            حذف
                        </a>

                        <a href="{{ route('answer_reactions',['answer' => $child->id]) }}"
                            style="background:blue; padding:8px 14px; border-radius:6px; text-decoration:none; color:yellow;">
                            مشاهده ریکشن ها
                        </a>
                    </div>

                    {{-- فرم ری‌اکشن --}}
                    @php
                        $userReaction = $child->reactions()->where('user_id', Auth::id())->first();
                    @endphp
                    <form action="{{ route('answerReaction_store', $child->id) }}" method="POST"
                        style="max-width:480px; margin:20px auto; padding:20px; background:#fefefe; border-radius:12px; 
                                box-shadow:0 4px 15px rgba(0,0,0,0.08); border:1px solid #ddd;">

                        @csrf

                        <div style="margin-bottom:15px;">
                            <label style="font-weight:bold; display:block; margin-bottom:10px; font-size:16px;">
                                Reaction:
                            </label>

                            <div style="display:flex; gap:25px; align-items:center; flex-wrap:wrap;">

                                {{-- لایک --}}
                                <label style="display:flex; align-items:center; gap:8px; cursor:pointer; font-size:15px;">
                                    <input type="radio" name="reaction" value="1" style="transform:scale(1.3);"
                                        @if($userReaction && $userReaction->reaction == 1) checked @endif>

                            👍 لایک 
                            <span style="color:#007bff; font-weight:bold;">
                                {{$child->reactions->where('reaction', 1)->count()}}
                            </span>
                        </label>

                        {{-- دیسلایک --}}
                        <label style="display:flex; align-items:center; gap:8px; cursor:pointer; font-size:15px;">
                            <input type="radio" name="reaction" value="-1" style="transform:scale(1.3);"
                                @if($userReaction && $userReaction->reaction == -1) checked @endif>

                            👎 دیسلایک 
                            <span style="color:#d60000; font-weight:bold;">
                                {{$child->reactions->where('reaction', -1)->count()}}
                            </span>
                        </label>

                            {{-- دکمه ثبت --}}
                            <button type="submit"
                                style="padding:10px 18px; background:#007bff; color:white; border:none;
                                    border-radius:8px; font-size:15px; font-weight:bold; cursor:pointer;">
                                ثبت واکنش
                            </button>
                        </div> 
                    </div>
                </form>


                </div>
                @endforeach

                {{-- تاریخ --}}
                <div style="color:#777; font-size:13px; margin-top:12px;">
                    <strong>تاریخ:</strong> {{ $answer->created_at }}
                </div>

                {{-- دکمه‌های اصلی --}}
                <div style="display:flex; gap:10px; margin-top:15px;">

                    <a href="{{ route('answer_edit',['courseanswer' => $answer->id]) }}"
                        style="background:#ffe08a; padding:8px 14px; border-radius:6px; text-decoration:none; color:#000;">
                        ویرایش
                    </a>

                    <a href="{{ route('answer_delete',['courseanswer' => $answer->id]) }}"
                        style="background:#ffcece; padding:8px 14px; border-radius:6px; text-decoration:none; color:#c40000;">
                        حذف
                    </a>

                    <a href="{{ route('answer_reactions',['courseanswer' => $answer->id]) }}"
                        style="background:blue; padding:8px 14px; border-radius:6px; text-decoration:none; color:yellow;">
                        مشاهده ریکشن ها
                    </a>

                </div>

                {{-- فرم پاسخ به همین پاسخ --}}
                <div style="
                    margin-top:20px;
                    padding:15px;
                    background:#f8fafc;
                    border-radius:8px;
                    border:1px solid #e5e7eb;
                ">
                    <form action="{{ route('answer_store', $question->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="parent_id" value="{{ $answer->id }}">

                        <textarea name="answer"
                            style="width:100%; height:90px; padding:10px; border-radius:6px; border:1px solid #ccc; resize:vertical;"
                            placeholder="پاسخ خود را بنویسید..."></textarea>

                        <button type="submit" 
                            style="margin-top:10px; padding:8px 16px; background:#007bff; color:#fff; border:none; border-radius:6px; cursor:pointer;">
                            ارسال پاسخ
                        </button>
                    </form>
                </div>
                        @php
                            $userReaction = $answer->reactions()->where('user_id', 0)->first();
                        @endphp
                <form action="{{ route('answerReaction_store', $answer->id) }}" method="POST"
                        style="max-width:480px; margin:20px auto; padding:20px; background:#fefefe; border-radius:12px; 
                                box-shadow:0 4px 15px rgba(0,0,0,0.08); border:1px solid #ddd;">

                        @csrf

                        <div style="margin-bottom:15px;">
                            <label style="font-weight:bold; display:block; margin-bottom:10px; font-size:16px;">
                                Reaction:
                            </label>

                            <div style="display:flex; gap:25px; align-items:center; flex-wrap:wrap;">

                                {{-- لایک --}}
                                <label style="display:flex; align-items:center; gap:8px; cursor:pointer; font-size:15px;">
                                    <input type="radio" name="reaction" value="1" style="transform:scale(1.3);"
                                        @if($userReaction && $userReaction->reaction == 1) checked @endif>

                            👍 لایک 

                           
                            <span style="color:#007bff; font-weight:bold;">
                                {{$answer->reactions->where('reaction', 1)->count()}}
                            </span>
                        </label>

                        {{-- دیسلایک --}}
                        <label style="display:flex; align-items:center; gap:8px; cursor:pointer; font-size:15px;">
                            <input type="radio" name="reaction" value="-1" style="transform:scale(1.3);"
                                @if($userReaction && $userReaction->reaction == -1) checked @endif>

                            👎 دیسلایک 
                            <span style="color:#d60000; font-weight:bold;">
                                {{$answer->reactions->where('reaction', -1)->count()}}
                            </span>
                        </label>

                            {{-- دکمه ثبت --}}
                            <button type="submit"
                                style="padding:10px 18px; background:#007bff; color:white; border:none;
                                    border-radius:8px; font-size:15px; font-weight:bold; cursor:pointer;">
                                ثبت واکنش
                            </button>
                        </div> 
                    </div>
                </form>

            </li>
            @endif
        @endforeach
    </ul>

@else
    <p style="color:gray; text-align:center;">هیچ پاسخی ثبت نشده است.</p>
@endif


{{-- فرم پاسخ اصلی به سؤال --}}
<div style="
    max-width:900px;
    margin:40px auto;
    padding:20px;
    background:#ffffff;
    border-radius:12px;
    border:1px solid #e5e7eb;
    box-shadow:0 3px 8px rgba(0,0,0,0.05);
">
    <h3 style="margin-bottom:10px; font-size:18px;">افزودن پاسخ جدید:</h3>

    <form action="{{ route('answer_store', $question->id) }}" method="post">
        @csrf
        <textarea name="answer" 
            style="width:100%; height:120px; padding:12px; border-radius:8px; border:1px solid #ccc; resize:vertical;"
            placeholder="متن پاسخ را وارد کنید..."></textarea>

        <button type="submit" 
            style="margin-top:12px; padding:10px 18px; background:#28a745; color:white; border:none; border-radius:6px; cursor:pointer;">
            ارسال پاسخ
        </button>
    </form>
</div>
