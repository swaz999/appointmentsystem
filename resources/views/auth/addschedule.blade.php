<html>
<head>
	<title>Add Schedule</title>
</head>
<body>
<form action="addschedule" method="post">
	Faculty ID: <input type="text" name="facultyid" placeholder="Enter Faculty ID"/><br><br>
		Location: <input type="text" name="location" placeholder="Enter Location"/><br><br>
Available Days: <label><input type="checkbox" name="availabledays">Monday</label>
	  <label><input type="checkbox"> Tues</label>
	   <label><input type="checkbox"> Wed</label>
	    <label><input type="checkbox"> Thur</label>
	     <label><input type="checkbox"> Fri</label>
	      <label><input type="checkbox"> Satur</label>
	       <label><input type="checkbox"> Sun</label><br><br>
	       Available Timing : 
	       <input type="text" name="availabletiming" value="Enter Timing"/><br><br>
	       <input type="submit" name="addsubmit" value="ADD"/>

</form>
</body>
