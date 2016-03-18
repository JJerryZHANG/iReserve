<?php
  		include 'config.php';

		$result = mysql_query("SELECT * FROM Orders order by LastName");
		while($row = mysql_fetch_array($result))
		{
			echo $row['FirstName'] . "\t" . $row['LastName']. "\t" .$row['Phone']. "\t" .$row['Email']. "\t" .$row['Store']. "\t" .$row['Model']. "\t" .$row['OrderDate'] ;
			echo "<br />";
		}
		mysql_close($con);
?>