<?php
session_start();
if (isset($_SESSION))
{
    unset($_SESSION);
    session_unset();
    session_destroy();
	header('Location:http://localhost/PCLUB/admin.php');
}

?>