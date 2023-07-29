<?php
include ("../model/mydb.php");

$email=$_REQUEST["email"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->deleteUser("admin", $conobj, $email);

if($result==TRUE)
{
    header("Location: ../view/ShowAlladmin.php");
}
else
{
    echo "can't delete";
}




?>
