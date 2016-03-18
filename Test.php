<?php

	$con=mysql_connect("localhost:3306","root","");
	mysql_select_db ("test");

	$result=mysql_query("select mem_t.`name` as m_name,product_t.`name` as p_name,product_t.price,order_t.quantity from mem_t,order_t,product_t where order_t.mid=mem_t.id and order_t.pid=product_t.id");
	while($row = mysql_fetch_array ( $result )){
		echo $row ['m_name'] . "\t" . $row ['p_name'] . "\t" . $row ['price'] * $row ['quantity'];
		echo "<br />";
		}

	mysql_close($con);

?>