   @extends('admin.app.dashboard')
   @section('content')
       <form action="{{ route('lesson_store') }}" method="POST" enctype="multipart/form-data"
           style="max-width:600px; margin:auto;">
           @csrf

           <h2 style="font-size:22px; margin-bottom:15px;">افزودن درس جدید</h2>

           <div style="margin-bottom:15px;">
               <label for="course_id">دوره مرتبط:</label><br>
               <select name="course_id" id="course_id" style="width:100%; padding:6px;">
                   <option value="">-- انتخاب کنید --</option>
                   @foreach ($courses as $cour)
                       <option value="{{ $cour->id }}" @if (isset($course) && $course->id == $cour->id) selected @endif>
                           {{ $cour->title }}</option>
                   @endforeach
               </select>
           </div>

           <div style="margin-bottom:15px;">
               <label for="season_id">فصل مرتبط:</label><br>
               <select name="season_id" id="season_id" style="width:100%; padding:6px;">
                   <option value="">-- انتخاب کنید --</option>
                   @foreach ($seasons as $seas)
                       <option value="{{ $seas->id }}" @if (isset($season) && $season->id == $seas->id) selected @endif>
                           {{ $seas->title }}</option>
                   @endforeach
               </select>
           </div>

           <div style="margin-bottom:15px;">
               <label for="title">عنوان درس:</label><br>
               <input type="text" name="title" id="title" style="width:100%; padding:6px;">
           </div>

           <div style="margin-bottom:15px;">
               <label for="description">توضیحات:</label><br>
               <textarea name="description" id="description" rows="4" style="width:100%; padding:6px;"></textarea>
           </div>

           <div style="margin-bottom:15px;">
               <label for="price">قیمت (تومان):</label><br>
               <input type="number" name="price" id="price" style="width:100%; padding:6px;">
           </div>

           <div style="margin-bottom:15px;">
               <label for="order">ترتیب نمایش:</label><br>
               <input type="number" name="order" id="order" style="width:100%; padding:6px;">
           </div>

           <div style="margin-bottom:15px;">
               <label for="duration">مدت زمان درس:</label><br>
               <input type="text" name="duration" id="duration" style="width:100%; padding:6px;">
           </div>

           <div style="margin-bottom:15px;">
               <label>این درس رایگان است
                   <input type="checkbox" name="free" value="1">
               </label>
           </div>

           <div style="margin-bottom:15px;">
               <label for="video">فایل ویدیو:</label><br>
               <input type="file" name="video" id="video" style="width:100%; padding:6px;">
           </div>

           <div>
               <button type="submit"
                   style="background:#007bff; color:white; padding:8px 20px; border:none; border-radius:5px; cursor:pointer;">
                   ثبت درس
               </button>
           </div>
       </form>
   @endsection
