<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Add Employee</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<form method="post">
	@csrf
	<table border="1">
		<tr>
			<td>Employee Name</td>
			<td><input type="text" name="empname" class="form-control"></td>
		</tr>
		<tr>
			<td>Company Name</td>
			<td>
				<select name="cmpname" class="form-control">
					<option value="select city" disabled="true" selected="ture">Select Company Name</option>
					@foreach($jobs as $jobCmp)
						<option value="{{$jobCmp->cmpname}}">{{$jobCmp->cmpname}}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td><input type="text" name="phn" class="form-control"></td>
		</tr>
        <tr>
			<td>User Name</td>
			<td><input type="text" name="username" class="form-control"></td>
		</tr>
        <tr>
			<td>Password</td>
			<td><input type="password" name="password" class="form-control"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save" ></td>
		</tr>
	</table>
</form>

</body>
</html>