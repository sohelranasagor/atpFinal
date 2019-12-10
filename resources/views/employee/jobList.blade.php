<!DOCTYPE html>
<html>
<head>
	<title>Job List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
</head>
<body>
	<h1>Job List</h1>
	<a href="{{route('employee.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	<input id="myInput" type="text" placeholder="Search.." class="form-control"><br>
	
	<table border="1">
		<thead>
			<tr>
				<th>Company Name</th>
				<th>Job Title</th>
				<th>Job Location</th>
				<th>Salary</th>
				<th>ACTION</th>
			</tr>
		</thead>

	 @foreach($jobs as $s)
		<tbody id="myTable">
			<tr>
				<td>{{$s->cmpname}}</td>
				<td>{{$s->jobTitle}}</td>
				<td>{{$s->jobLocation}}</td>
				<td>{{$s->salary}}</td>
				<td>
					<a href="{{route('employee.edit', $s->jobId)}}">Edit</a> | 
					<a href="{{route('employee.delete', $s->jobId)}}">Delete</a> | 
					<a href="{{route('employee.jobdetails', $s->jobId)}}">Details</a>
				</td>
			</tr>
		</tbody>
	@endforeach

	</table>
	<script>
	$(document).ready(function(){
	$("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	});
	</script>

</body>
</html>