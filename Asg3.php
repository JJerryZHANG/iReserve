<?php
/*
$productArray = array(
				array('name' => 1, 'price' => 2234, 'image' => 1),
				array('name' => 2, 'price' => 2346, 'image' => 2), 
				array('name' => 3, 'price' => 100, 'image' => 3),
				array('name' => 4, 'price' => 6936, 'image' => 4),
				array('name' => 5, 'price' => 7752, 'image' => 5),				  
				);

for ($i = 0; $i < count($productArray); $i++) 

{
			echo("<img src='img/");
			echo($productArray[$i]['image']);
			//echo($productArray['image'][$i]);
			//echo($productArray['image'][$i]+1);
			//echo($productArray['image']);
			//echo($productArray[$i+1]);
			echo(".jpg' width='100' height='100'/>");
}
*/

function print_msg($msg,$title){
echo '<table border=\'1\' cellspacing=\'0\' cellpadding=\'2\' style=\'width: 70%\'>';
echo '<tr><td style=\'background-color: #3366FF; color: white; font-weight: bold;\'>'. htmlspecialchars($title) .'</td></tr>';
echo '<tr><td style=\'text-align: center;\'>'. htmlspecialchars($msg) .'</td></tr>';
echo '</table>';
}

print_msg("msg","title");

session_start();
settype($value, "integer");
$value=1;
$_INTEGER['session']=$value;
$_SESSION['int']=$value;
echo $_SESSION['int'];
echo $_INTEGER['session'];

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"></form>
<!--
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<form action="$_SERVER['PHP_SELF']" method="post">
-->


