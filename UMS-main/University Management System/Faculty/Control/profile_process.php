<?php
    session_start();
    include("../model/mydb.php");

    $fname=$lname=$gender=$email=$address="";
    if(empty($_SESSION["email"])){
        header("Location:../view/login.php");
    }

    $mydb=new MyDB();
    $conobj=$mydb->openCon();
    $result=$mydb->getUserInfo("faculty",$_SESSION["email"],$conobj);
    
    if($result->num_rows>0){
        
        while($row=$result->fetch_assoc()){
            $fname=$row["Firstname"];
            $lname=$row["Lastname"];
            $email=$row["Email"];
            $gender=$row["Gender"];
            $address=$row["Address"];
        }
    }
    
?>