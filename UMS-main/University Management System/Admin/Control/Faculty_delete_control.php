<?php
include ("../model/mydb.php");


$email=$_REQUEST["email"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->deleteUser("faculty", $conobj, $email);

if($result==TRUE)
{
    header("Location: ../view/ShowAllFaculty.php");
}
else
{
    echo "can't delete";
}




?>
