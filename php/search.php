<?php
	include 'config.php';
	$phone=$_POST["rphone"];
  		
		$result = mysql_query("SELECT * FROM Orders where Phone=$phone");
		while($row = mysql_fetch_array($result))
		{
			echo $row['FirstName'] . "\t" . $row['LastName']. "\t" .$row['Phone']. "\t" .$row['Email']. "\t" .$row['Store']. "\t" .$row['Model']. "\t" .$row['OrderDate'] ;
			echo "<br />";
		}
		mysql_close($con);
?>