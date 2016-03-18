
<?php  
	include 'config.php';

	$result=mysql_query("select * from Orders");

	while($row=mysql_fetch_array($result))
		{echo $row[0];}

	mysql_close ( $con ); 


?>