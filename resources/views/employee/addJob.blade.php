<!DOCTYPE html>
<html>
<head>
	<title>Add Job</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Add Job</h1>
	<a href="{{route('employee.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<form method="post">
	@csrf
	<table border="1">
		<tr>
			<td>Company Name</td>
			<td><input type="text" name="cmpname"></td>
		</tr>
		<tr>
			<td>Job Title</td>
			<td><input type="text" name="jobTitle"></td>
		</tr>
        <tr>
			<td>Location</td>
			<td><input type="text" name="location"></td>
		</tr>
        <tr>
			<td>Salary</td>
			<td><input type="text" name="salary"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

</body>
</html>