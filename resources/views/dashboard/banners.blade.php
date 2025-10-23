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
      <input type="hidden" name="sectionName" value="banners">
      <div>
         <h4>banner 1</h4>
         <input type="hidden" name="firstBanner" value="@if(count($banners)==4){{$banners[0]->id}}@endif">
         <label for="img1">image 1: </label>
         <input type="file" name="img1" id="img1" required value="@if(count($banners)==4){{$banners[0]->image}}@endif">
         <label for="title1">title 1: </label>
         <input type="text" name="title1" id="title1" required value="@if(count($banners)==4){{$banners[0]->title}}@endif">
         <label for="linkContent1">link content 1: </label>
         <input type="text" name="linkContent1" id="linkContent1" required value="@if(count($banners)==4){{$banners[0]->link_content}}@endif">
         <label for="linkHref1">link href 1: </label>
         <input type="text" name="linkHref1" id="linkHref1" required value="@if(count($banners)==4){{$banners[0]->link_href}}@endif">
      </div>
      <hr>
      <div>
         <h4>banner 2</h4>
         <input type="hidden" name="secondBanner" value="@if(count($banners)==4){{$banners[1]->id}}@endif">
         <label for="img2">image 2: </label>
         <input type="file" name="img2" id="img2" required value="@if(count($banners)==4){{$banners[1]->image}}@endif">
         <label for="title2">title 2: </label>
         <input type="text" name="title2" id="title2" required value="@if(count($banners)==4){{$banners[1]->title}}@endif">
         <label for="linkContent2">link content 2: </label>
         <input type="text" name="linkContent2" id="linkContent2" required value="@if(count($banners)==4){{$banners[1]->link_content}}@endif">
         <label for="linkHref2">link href 2: </label>
         <input type="text" name="linkHref2" id="linkHref2" required value="@if(count($banners)==4){{$banners[1]->link_href}}@endif">
      </div>
      <hr>
      <div>
         <h4>banner 3</h4>
         <input type="hidden" name="thirdBanner" value="@if(count($banners)==4){{$banners[2]->id}}@endif">
         <label for="img3">image 3: </label>
         <input type="file" name="img3" id="img3" required value="@if(count($banners)==4){{$banners[2]->image}}@endif">
         <label for="title3">title 3: </label>
         <input type="text" name="title3" id="title3" required value="@if(count($banners)==4){{$banners[2]->title}}@endif">
         <label for="linkContent3">link content 3: </label>
         <input type="text" name="linkContent3" id="linkContent3" required value="@if(count($banners)==4){{$banners[2]->link_content}}@endif">
         <label for="linkHref3">link href 3: </label>
         <input type="text" name="linkHref3" id="linkHref3" required value="@if(count($banners)==4){{$banners[2]->link_href}}@endif">
      </div>
      <hr>
      <div>
         <h4>banner 4</h4>
         <input type="hidden" name="forthBanner" value="@if(count($banners)==4){{$banners[3]->id}}@endif">
         <label for="img4">image 4: </label>
         <input type="file" name="img4" id="img4" required value="@if(count($banners)==4){{$banners[3]->image}}@endif">
         <label for="title4">title 4: </label>
         <input type="text" name="title4" id="title4" required value="@if(count($banners)==4){{$banners[3]->title}}@endif">
         <label for="linkContent4">link content 4: </label>
         <input type="text" name="linkContent4" id="linkContent4" required value="@if(count($banners)==4){{$banners[3]->link_content}}@endif">
         <label for="linkHref4">link href 4: </label>
         <input type="text" name="linkHref4" id="linkHref4" required value="@if(count($banners)==4){{$banners[3]->link_href}}@endif">
      </div>
      <hr>
      <input type="submit" value="submit">
   </form>
</body>

</html>