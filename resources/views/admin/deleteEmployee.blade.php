<!DOCTYPE html>
<html>
<head>
	<title>Delete Employee:{{$user->name}}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Delete Employee:{{$user->name}}</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<table border="1">
		
		<tr>
			<td>Employee Name</td>
			<td>{{$user->name}}</td>
		</tr>
		<tr>
			<td>Company Name</td>
			<td>{{$user->cmpname}}</td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td>{{$user->cell}}</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td>{{$user->username}}</td>
		</tr>
    </table>
    <form method="post">
    @csrf
        <h3>Are you sure?</h3>
        <input type="submit" name="submit" value="Confirm">
    </form>
</body>
</html>