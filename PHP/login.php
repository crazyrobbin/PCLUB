<?php
session_start();
//if($_SESSION['username']) header('Location:http://localhost/PCLUB/index.php');
$username=$_POST['username'];
$pwd=$_POST['pwd'];
//if($username==null||$pwd==null||$username=="") header('Location:http://localhost/PCLUB/index.php');

$con=mysql_connect("localhost:3306");
mysql_select_db("test",$con);

$result=mysql_query("select * from  login where userid='$username' and password='$pwd' ");
$row=mysql_fetch_array($result);
if($row) 
{	
	//if($_SESSION['error']) $_SESSION['error']=!$_SESSION['error'];
	$_SESSION['name']=$row['name'];
	$_SESSION['username']=$row['userid'];
	$_SESSION['pwd']=$row['password'];
	mysql_close();
	header('Location:http://localhost/PCLUB/index.php');
	//include("http://localhost/PCLUB/index.php");
}
else {
	mysql_close();
	$_SESSION['error']=1;
	header('Location:http://localhost/PCLUB/index.php');
//echo "Userid and Password combination you entered is not valid... !!!";
}
//$_SESSION['username']=$username;
//$_SESSION['name']=$name;
//$_SESSION['pwd']=$pwd;

//header('Location:http://localhost/PCLUB/index.php');
//echo "hi";
?>
