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
         <h4>big Tile</h4>
         <input type="hidden" name="bigTile" value="@if(count($bigTile)==1){{$bigTile[0]->id}}@endif">
         <label for="header">header : </label>
         <input type="text" name="header" id="header" value="@if(count($bigTile)==1){{$bigTile[0]->header}}@endif" required>
         <br><br>
         <label for="title">title : </label>
         <input type="text" name="title" id="title" value="@if(count($bigTile)==1){{$bigTile[0]->title}}@endif" required>
         <br><br>
         <label for="text">text : </label>
         <input type="text" name="text" id="text" value="@if(count($bigTile)==1){{$bigTile[0]->text}}@endif" required>
         <br><br>
         <label for="btn1_content">btn1_content : </label>
         <input type="text" name="btn1_content" id="btn1_content" value="@if(count($bigTile)==1){{$bigTile[0]->btn1_content}}@endif" required>
         <br><br>
         <label for="btn1_href">btn1_href : </label>
         <input type="text" name="btn1_href" id="btn1_href" value="@if(count($bigTile)==1){{$bigTile[0]->btn1_href}}@endif" required>
         <br><br>
         <label for="btn2_content">btn2_content : </label>
         <input type="text" name="btn2_content" id="btn2_content" value="@if(count($bigTile)==1){{$bigTile[0]->btn2_content}}@endif" required>
         <br><br>
         <label for="btn2_href">btn2_href : </label>
         <input type="text" name="btn2_href" id="btn2_href" value="@if(count($bigTile)==1){{$bigTile[0]->btn2_href}}@endif" required>
         <br><br>
         <label for="img">img : </label>
         <input type="file" name="img" id="img" value="@if(count($bigTile)==1){{$bigTile[0]->img}}@endif" required>
         <br><br>
         <label for="bg_img">bg_img : </label>
         <input type="file" name="bg_img" id="bg_img" value="@if(count($bigTile)==1){{$bigTile[0]->bg_img}}@endif" required>
         <br><br>
      </div>
      <hr>
      <input type="submit" value="submit">
   </form>
</body>

</html>