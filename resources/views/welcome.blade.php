<!DOCTYPE html>
<html>
<head>
    <title>Uploader</title>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body>

  @include('messages')


<form enctype="multipart/form-data" action="{{route('upload_images')}}" method="POST">
    
    {!! csrf_field() !!}
<div class="file-upload">


  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="files[]" required  multiple />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" alt="your image"/>
    <div class="image-title-wrap"><br><br>
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>


   <button class="file-upload-btn" type="submit">Upload Images</button>
</div>




</form>




</body>
</html>