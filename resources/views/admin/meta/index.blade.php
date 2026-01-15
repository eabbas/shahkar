   @extends('admin.app.dashboard')
   @section('content')
       @if ($metas->count() > 0)
           <ul style="list-style:none; padding:0;">
               @foreach ($metas as $meta)
                   <li
                       style="margin-bottom:15px; padding:12px; border:1px solid #ccc; border-radius:8px; background:#fafafa;">

                       <div style="margin-bottom:6px;">
                           <strong> عنوان </strong>
                           {{ $meta->title }}
                       </div>

                       <div style="color:gray; font-size:13px; margin-bottom:10px;">
                           <strong>تاریخ:</strong> {{ $meta->created_at }}
                       </div>


                       <div style="display:flex; gap:10px;">

                           <a href="{{ route('meta_edit', [$meta->id]) }}"
                               style="background:#ffc107; color:#000; padding:6px 12px; border-radius:5px; text-decoration:none;">
                               ویرایش
                           </a>
                           <a href="{{ route('meta_delete', [$meta->id]) }}"
                               style="background:#ffc107; color:red; padding:6px 12px; border-radius:5px; text-decoration:none;">
                               حذف
                           </a>
                           <a href="{{ route('meta_show', [$meta->id]) }}"
                               style="background:#ffc107; color:red; padding:6px 12px; border-radius:5px; text-decoration:none;">
                               نمایش
                           </a>



                       </div>

                   </li>
               @endforeach
           </ul>
       @else
           <p style="color:gray;">هنوز ایجاد نشده است </p>
       @endif
   @endsection
