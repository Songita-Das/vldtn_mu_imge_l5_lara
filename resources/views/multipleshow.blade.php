<!DOCTYPE html>
<html>
<head>
	<title>SHow Image</title>
</head>
<body>

<div>
	@foreach($data as $m)

	<img src="/thumbnail/{{ $m->image }}">

	@endforeach
</div>

</body>
</html>