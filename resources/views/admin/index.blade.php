<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>

	<a href="{{route('logout.index')}}">logout</a>


</body>
</html>