<!DOCTYPE html>
<html>
<head>
	<title>SHow Image</title>
</head>
<body>

<div>
	@foreach($data as $d)

	<img src="/thumbnail/{{ $d->image }}">

	@endforeach
</div>

</body>
</html>