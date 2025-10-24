<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="{{route('banners-upsert')}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="sectionName" value="bigBanner">
      <div>
         <h4>big banner</h4>
         <input type="hidden" name="bigBanner" value="@if(count($bigBanner)==1){{$bigBanner[0]->id}}@endif">
         <label for="img">image : </label>
         <input type="file" name="img" id="img" required value="@if(count($bigBanner)==1){{$bigBanner[0]->image}}@endif">
         <label for="title">title : </label>
         <input type="text" name="title" id="title" required value="@if(count($bigBanner)==1){{$bigBanner[0]->title}}@endif">
         <label for="linkContent">link content : </label>
         <input type="text" name="linkContent" id="linkContent" required value="@if(count($bigBanner)==1){{$bigBanner[0]->link_content}}@endif">
         <label for="linkHref">link href : </label>
         <input type="text" name="linkHref" id="linkHref" required value="@if(count($bigBanner)==1){{$bigBanner[0]->link_href}}@endif">
      </div>
      <hr>
      <input type="submit" value="submit">
   </form>
</body>

</html>