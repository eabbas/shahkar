   @extends('admin.app.dashboard')
   @section('content')
       <form action="{{ route('attachment_store') }}" method="POST" enctype="multipart/form-data"
           style="max-width:600px; margin:auto;">
           @csrf

           <h2>افزودن پیوست به درس {{ $lesson->title }}</h2>

           <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">

           <div style="margin-bottom:15px;">
               <label for="file">فایل:</label><br>
               <input type="file" name="files[]" id="file" style="width:100%; padding:6px;" multiple>
           </div>

           <button type="submit"
               style="background:#007bff; color:white; padding:8px 20px; border:none; border-radius:5px;">آپلود
               فایل</button>
       </form>
   @endsection
