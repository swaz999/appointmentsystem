<html>
<head>
<title>
Appointments List
</title>
<body align="center">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style type="text/css">
	body{
	background-color: ;

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
<h2 align="center">Appointments List</h2>
<br>
<br>
<form action ="" method="">
<a href="faculty_home">Appointments</a>
<a href="availability">Availability</a>
<br>
<?php 
 
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Date</th>";
echo "<th>time</th>";
echo "<th>Location</th>";
echo "</tr>";
foreach ($applist as $appointment) {

	echo "<tr>";
echo "<td>$appointment->id</td>";
echo "<td>$appointment->date</td>";
echo "<td>$appointment->time</td>";
echo "<td>$appointment->location</td>";
echo "</tr>";

}

echo "</table>";

?>

</form>
</body>
</head>
</html>