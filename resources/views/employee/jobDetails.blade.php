<!DOCTYPE html>
<html>
<head>
	<title>Job Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Job Details</h1>
	<a href="{{route('employee.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a>  <br><br>
	
	<table border="1">
		
		<tr>
			<td>Company Name</td>
			<td>{{$job->cmpname}}</td>
		</tr>
		<tr>
			<td>Job Title</td>
			<td>{{$job->jobTitle}}</td>
		</tr>
		<tr>
			<td>Job Location</td>
			<td>{{$job->jobLocation}}</td>
		</tr>
		<tr>
			<td>Salary</td>
			<td>{{$job->salary}}</td>
		</tr>
	</table>
</body>
</html>