   @extends('admin.app.dashboard')
   @section('content')
       <form action="{{ route('lesson_update', $lesson->id) }}" method="POST" enctype="multipart/form-data"
           style="max-width:600px; margin:auto;">
           @csrf

           <h2 style="font-size:22px; margin-bottom:15px;">ویرایش {{ $lesson->title }} </h2>

           <div style="margin-bottom:15px;">
               <label for="course_id">دوره مرتبط:</label><br>
               <select name="course_id" id="course_id" style="width:100%; padding:6px;">
                   <option value="">-- انتخاب کنید --</option>
                   @foreach ($courses as $course)
                       <option value="{{ $course->id }}" {{ $lesson->course_id == $course->id ? 'selected' : '' }}>
                           {{ $course->title }}
                       </option>
                   @endforeach
               </select>
           </div>

           <div style="margin-bottom:15px;">
               <label for="season_id">فصل مرتبط:</label><br>
               <select name="season_id" id="season_id" style="width:100%; padding:6px;">
                   <option value="">-- انتخاب کنید --</option>
                   @foreach ($seasons as $season)
                       <option value="{{ $season->id }}" {{ $lesson->season_id == $season->id ? 'selected' : '' }}>
                           {{ $season->title }}
                       </option>
                   @endforeach
               </select>
           </div>

           <div style="margin-bottom:15px;">
               <label for="title">عنوان درس:</label><br>
               <input type="text" name="title" id="title" value="{{ $lesson->title }}"
                   style="width:100%; padding:6px;">
           </div>

           <div style="margin-bottom:15px;">
               <label for="description">توضیحات:</label><br>
               <textarea name="description" id="description" rows="4" style="width:100%; padding:6px;">{{ $lesson->description }}</textarea>
           </div>

           <div style="margin-bottom:15px;">
               <label for="price">قیمت (تومان):</label><br>
               <input type="number" name="price" id="price" value="{{ $lesson->price }}"
                   style="width:100%; padding:6px;">
           </div>

           <div style="margin-bottom:15px;">
               <label for="order">ترتیب نمایش:</label><br>
               <input type="number" name="order" id="order" value="{{ $lesson->order }}"
                   style="width:100%; padding:6px;">
           </div>

           <div style="margin-bottom:15px;">
               <label for="duration">مدت زمان درس:</label><br>
               <input type="text" name="duration" id="duration" value="{{ $lesson->duration }}"
                   style="width:100%; padding:6px;">
           </div>

           <div style="margin-bottom:15px;">
               <label>
                   <input type="checkbox" name="free" value="1" {{ $lesson->free ? 'checked' : '' }}> این درس
                   رایگان
                   است
               </label>
           </div>

           <div style="margin-bottom:15px;">
               <label for="video">آپلود ویدیو جدید:</label><br>
               <input type="file" name="video" id="video" style="width:100%; padding:6px;">
           </div>

           @if ($lesson->video_path)
               <div style="margin-bottom:15px;">
                   <video width="320" controls style="border-radius:8px;">
                       <source src="{{ asset('storage/' . $lesson->video_path) }}">
                   </video>
               </div>
           @endif

           <div>
               <button type="submit"
                   style="background:#007bff; color:white; padding:8px 20px; border:none; border-radius:5px; cursor:pointer;">
                   ثبت درس
               </button>
           </div>
       </form>
   @endsection
