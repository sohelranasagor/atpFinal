<!DOCTYPE html>
<html>
<head>
	<title>Employee List</title>
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
	<h1>Employee List</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	<input id="myInput" type="text" placeholder="Search.." class="form-control"><br><br>
	
	<table border="1">
		<thead>
			<tr>
				<th>Employee Name</th>
				<th>Company Name</th>
				<th>Contact No</th>
				<th>User Name</th>
				<th>ACTION</th>
			</tr>
		</thead>

	 @foreach($users as $s)
		<tbody id="myTable">
			<tr>
				<td>{{$s->name}}</td>
				<td>{{$s->cmpname}}</td>
				<td>{{$s->cell}}</td>
				<td>{{$s->username}}</td>
				<td>
					<a href="{{route('admin.edit', $s->id)}}">Edit</a> | 
					<a href="{{route('admin.delete', $s->id)}}">Delete</a> | 
					<a href="{{route('admin.Empdetails', $s->id)}}">Details</a>
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