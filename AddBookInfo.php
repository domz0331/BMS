<?php
	include ("Includes/connection.php");
	if(isset($_POST['Submit']))
	{

		$Start_Time = $_POST['starttime'];
		$End_Time = $_POST['endtime'];
			$sql = "INSERT INTO timetable(TimeStart, TimeEnd) VALUES ('".$Start_Time."', '".$End_Time."')";
			$result=mysql_query($sql,$con) or die (mysql_error());
				echo '<script type="text/javascript">
							alert("New Time Added!");
							location="addTimeHome.php";
						</script>';
	}
	else
	{
		echo 'not inserted';
	}
?>
