<?php

$name=$_POST['loginid'];
$password=$_POST['password'];

session_start();
$_SESSION['name']=$name;
$nam="admin";
$pass="admin";
if($name==$nam && $password ==$pass)
{
	header('Location:http://localhost/PCLUB/admin.php');
}
else {
	header('Location:http://localhost/PCLUB/PHP/admin/login.php');
}

?>