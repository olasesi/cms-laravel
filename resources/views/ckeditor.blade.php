<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Ckeditor Image Upload Example - ItSolutionStuff.com</title>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body>
  
<h1>Laravel 6 Ckeditor Image Upload Example - ItSolutionStuff.com</h1>

<form class="forms-sample" method="POST" action="{{route('admin.savepost')}}" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleInputName1">Post title *</label>

    <input value="{{old('title')}}" type="text" class="form-control" id="exampleInputName1" placeholder="Post title" name="title" required="required"> 
 
  </div>
<textarea name="editor1"></textarea>
</form>
   
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
   
</body>
</html>