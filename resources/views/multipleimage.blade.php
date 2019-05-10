<!DOCTYPE html>
<html>
<head>
	<title>Image upload</title>
</head>
<body>
   <form method="post" action="{{ route('multipleupload') }}" enctype="multipart/form-data">
   	{{Session::get('success')}}
	{{ csrf_field() }}
<input type="file" multiple name="image[]">
<br>
<input type="submit" name="submit">
</form>
<div>


<!-- <img src="{{asset('/thumbnail/1556992960.png')}}">
<img src="{{asset('/thumbnail/1556957856.jpeg')}}">
 -->
</div>
</body>
</html>