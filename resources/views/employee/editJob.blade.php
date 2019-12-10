<!DOCTYPE html>
<html>
<head>
    <title>Edit Job</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Edit Job</h1>
	<a href="{{route('employee.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<form action="" method="POST">
        <table border="1">
		
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="cmpname" value="{{$job->cmpname}}"></td>
            </tr>
            <tr>
                <td>Job Title</td>
                <td><input type="text" name="jobTitle" value="{{$job->jobTitle}}"></td>
            </tr>
            <tr>
                <td>Job Location</td>
                <td><input type="text" name="location" value="{{$job->jobLocation}}"></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary" value="{{$job->salary}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>