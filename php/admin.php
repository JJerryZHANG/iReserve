<?php
$username = $_POST ["name"];
$password = $_POST ["password"];

if ($username == "admin" && $password == "peter") {
	echo "<script>alert('Login Successful');location.href='../admin.html';</script>";
} else
	echo "<script>alert('Login Failed');history.go(-1);</script>";
?>