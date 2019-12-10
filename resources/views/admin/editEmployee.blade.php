<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee:{{$user->name}}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Edit Employee:{{$user->name}}</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<form action="" method="POST">
        <table border="1">
		
            <tr>
                <td>Employee Name</td>
                <td><input type="text" name="empname" value="{{$user->name}}"></td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="cmpname" value="{{$user->cmpname}}"></td>
            </tr>
            <tr>
                <td>Contact No</td>
                <td><input type="text" name="phn" value="{{$user->cell}}"></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username" value="{{$user->username}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>