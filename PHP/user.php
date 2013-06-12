<?php
session_start();
$username=$_SESSION['username'];
$name=$_SESSION['name'];
$pwd=$_SESSION['pwd'];
echo "Hello Mr. $name ..!!!<br>";
echo "<a href='logout.php'> Log Me Out </a> ";
?>