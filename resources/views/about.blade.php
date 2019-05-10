<!DOCTYPE html>
<html>
<head>
    <title>HELLOW</title>
</head>
<body>
<div>
    <h2>About</h2>
</div>
<div>
    <ul>
         @include('includes.menu')

    </ul>
    <a href="{{ URL:: to('/about-us')}}">About Us</a>

</div>
</body>
</html>