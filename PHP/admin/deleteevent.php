<?php
session_start();

if(!($_SESSION['name']))header('Location:http://localhost/PCLUB/admin.php');
global $name;
$name=$_SESSION['name'];


$con=mysql_connect("localhost:3306");
mysql_select_db("test",$con);
$one=mysql_fetch_array(mysql_query("select max(s_no) as count from event"));
$count=$one['count'];
mysql_query("delete from event where s_no=$count");
header ('Location:http://localhost/PCLUB/admin.php');

?>