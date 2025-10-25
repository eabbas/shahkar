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
      <input type="hidden" name="sectionName" value="tileBanners">
      <div>
         <h4>tile 1</h4>
         <input type="hidden" name="firstTile" value="@if(count($tileBanners)==2){{$tileBanners[0]->id}}@endif">
         <label for="img1">image 1: </label>
         <input type="file" name="img1" id="img1" required value="@if(count($tileBanners)==2){{$tileBanners[0]->image}}@endif">
         <label for="title1">title 1: </label>
         <input type="text" name="title1" id="title1" required value="@if(count($tileBanners)==2){{$tileBanners[0]->title}}@endif">
         <label for="linkContent1">link content 1: </label>
         <input type="text" name="linkContent1" id="linkContent1" required value="@if(count($tileBanners)==2){{$tileBanners[0]->link_content}}@endif">
         <label for="linkHref1">link href 1: </label>
         <input type="text" name="linkHref1" id="linkHref1" required value="@if(count($tileBanners)==2){{$tileBanners[0]->link_href}}@endif">
      </div>
      <hr>
      <div>
         <h4>tile 2</h4>
         <input type="hidden" name="secondTile" value="@if(count($tileBanners)==2){{$tileBanners[1]->id}}@endif">
         <label for="img2">image 2: </label>
         <input type="file" name="img2" id="img2" required value="@if(count($tileBanners)==2){{$tileBanners[1]->image}}@endif">
         <label for="title2">title 2: </label>
         <input type="text" name="title2" id="title2" required value="@if(count($tileBanners)==2){{$tileBanners[1]->title}}@endif">
         <label for="linkContent2">link content 2: </label>
         <input type="text" name="linkContent2" id="linkContent2" required value="@if(count($tileBanners)==2){{$tileBanners[1]->link_content}}@endif">
         <label for="linkHref2">link href 2: </label>
         <input type="text" name="linkHref2" id="linkHref2" required value="@if(count($tileBanners)==2){{$tileBanners[1]->link_href}}@endif">
      </div>
      <input type="submit" value="submit">
   </form>
</body>

</html>