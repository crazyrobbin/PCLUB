<?php
session_start();

if(!($_SESSION['name']))header('Location:http://localhost/PCLUB/admin.php');
global $name;
$name=$_SESSION['name'];

$title= $_POST['title'];
$venue= $_POST['venue'];
$date= $_POST['date'];
$month= $_POST['month'];

$con=mysql_connect("localhost:3306");
mysql_select_db("test",$con);

mysql_query("insert into event set title='$title',venue='$venue',date='$date',month='month'");

header ('Location:http://localhost/PCLUB/admin.php');


?>