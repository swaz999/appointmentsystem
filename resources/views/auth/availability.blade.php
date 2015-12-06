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
<?php 
 
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Available Days </th>";
echo "<th>Available Time</th>";
echo "<th>Location</th>";
echo "<th> </th>";
echo "</tr>";
foreach ($availlist as $availability) {

	echo "<tr>";
echo "<td>$availability->id</td>";
echo "<td>$availability->avaialable_days</td>";
echo "<td>$availability->available_time</td>";
echo "<td>$availability->location</td>";
echo "<td>$availability->faculty_id</td>";
echo "<td><input type=submit value=Reschedule></td>";
echo "<td><input type=submit value=cancel></td>";
echo "</tr>";

}

echo "</table>";

?>

</form>
</body>
</head>
</html>