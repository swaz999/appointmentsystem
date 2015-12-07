<html>
<head>
	<title>
		Appointments List
	</title>
	<body align="center">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<style type="text/css">
		body{
			background-color: pink;

		}
		th, td {
			padding: 15px;
		}
		</style>
		<div class="page-header">
			<h1 align="center">Appointment System</h1>
		</div>
		<br>
		<br>
		<h2 align="center">Availability</h2>
		<br>
		<br>
		<form action ="addschedule" method="get">
			<a href="appointments">Appointments</a>
			<a href="availability">Availability</a>
			<a href="addschedule">Add Schedule</a>

			<br>

			
			<table>
				<tr>
					<th>ID</th>
					<th>Available Days </th>
					<th>Available Time</th>
					<th>Location</th>
					<th> </th>
				</tr>
				@foreach($availlist as $availability)

				<tr>
					<td>{{$availability->id}}</td>
					<td>{{$availability->available_days}}</td>
					<td>{{$availability->available_time}}</td>
					<td>{{$availability->location}}</td>

					<td><input type=submit value=Reschedule></td>
					<td><input type=submit value=cancel></td>
				</tr>

				@endforeach

			</table>



		</form>
	</body>
</head>
</html>