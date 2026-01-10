   @extends('admin.app.dashboard')
   @section('content')
       <h2 style="font-size:24px; font-weight:bold; margin-bottom:20px;">لیست کتگوری‌ها</h2>

       <div style="
    display:grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap:20px;
">
           @foreach ($categories as $cat)
               <div style="
            background:#fff;
            border:1px solid #e5e5e5;
            border-radius:12px;
            overflow:hidden;
            box-shadow:0 3px 10px rgba(0,0,0,0.05);
            transition:0.2s;
        "
                   onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">

                   <!-- تصویر -->
                   <div style="width:100%; height:150px; overflow:hidden;">
                       <img src="{{ asset('storage/' . $cat->img) }}"
                           style="
                        width:100%; 
                        height:100%; 
                        object-fit:cover;
                        display:block;
                    ">
                   </div>

                   <!-- محتوا -->
                   <div style="padding:15px;">

                       <!-- عنوان -->
                       <h3 style="font-size:18px; margin-bottom:8px; color:#333;">
                           {{ $cat->title }}
                       </h3>

                       <!-- توضیحات -->
                       <p style="font-size:14px; color:#666; height:40px; overflow:hidden;">
                           {{ $cat->description }}
                       </p>

                       <!-- دسته‌بندی والد -->
                       <p style="font-size:14px; margin-top:10px;">
                           <strong>دسته والد:</strong>
                           @if ($cat->parent_id == 0)
                               <span style="color:#888;">— ندارد —</span>
                           @else
                               <span style="color:#007bff;">
                                   {{ $cat->parent?->title ?? '---' }}
                               </span>
                           @endif
                       </p>

                       <!-- نمایش در صفحه اصلی -->
                       <p style="font-size:14px; margin-top:5px;">
                           <strong>نمایش در صفحه اصلی:</strong>
                           @if ($cat->show_in_home == 1)
                               <span style="color:green;">بله</span>
                           @else
                               <span style="color:red;">خیر</span>
                           @endif
                       </p>

                       <!-- دکمه‌ها -->
                       <div style="margin-top:15px; display:flex; gap:10px;">
                           <a href="{{ route('coursecategory.edit', $cat->id) }}"
                               style="color:#007bff; font-weight:bold;">ویرایش</a>

                           <a href="{{ route('coursecategory.delete', $cat->id) }}"
                               style="color:#d00; font-weight:bold;">حذف</a>

                           <a href="{{ route('coursecategory.show', $cat->id) }}"
                               style="color:green; font-weight:bold;">سینگل</a>
                       </div>

                   </div>
               </div>
           @endforeach
       </div>
   @endsection
