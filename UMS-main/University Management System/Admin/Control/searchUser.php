<?php
include("../model/mydb.php");

$email = $_REQUEST["Email"];



$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchUser("admin", $conobj, $email);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        $fname=$row["Firstname"];
        $mname=$row["Middlename"];
        $lname=$row["Lastname"];
        $email=$row["Email"];
        $gender=$row["Gender"];
        $file=$row["File"];
        echo "name: ".$fname.$mname.$lname.$email.$gender.$file;
    }
}
else
{
    echo "no data found";
}


?>