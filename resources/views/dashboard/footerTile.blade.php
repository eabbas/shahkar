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
      <div>
         <h4>footer tile</h4>
         <input type="hidden" name="footerTile" value="@if(count($footerTile)==1){{$footerTile[0]->id}}@endif">
         <label for="img">image : </label>
         <input type="file" name="img" id="img" required value="@if(count($footerTile)==1){{$footerTile[0]->image}}@endif">
         <label for="bg_img">bg image : </label>
         <input type="file" name="bg_img" id="bg_img" required value="@if(count($footerTile)==1){{$footerTile[0]->bg_img}}@endif">
         <label for="title">title : </label>
         <input type="text" name="title" id="title" required value="@if(count($footerTile)==1){{$footerTile[0]->title}}@endif">
         <label for="text">text : </label>
         <input type="text" name="text" id="text" required value="@if(count($footerTile)==1){{$footerTile[0]->text}}@endif">
      </div>
      <hr>
      <input type="submit" value="submit">
   </form>
</body>

</html>