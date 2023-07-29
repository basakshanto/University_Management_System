<?php
    session_start();
    include("../model/mydb.php");

    
    $fname=$mname=$lname=$gender=$address=$email=$_FILES="";
    if(empty($_SESSION["email"])){
        header("Location:../view/login.php");
    }


    $mydb=new MyDB();
    $conobj=$mydb->openCon();
    $result=$mydb->getUserInfo("admin",$_SESSION["email"],$conobj);
    
    if($result->num_rows>0){
        
        while($row=$result->fetch_assoc()){
            $fname=$row["Firstname"];
            $mname=$row["Middlename"];
            $lname=$row["Lastname"];
            $email=$row["Email"];
            $gender=$row["Gender"];
            $address=$row["Address"];
            $_FILES=$row["File"];
        }
    }
    
?>