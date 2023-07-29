<?php
    session_start();
    include("../model/mydb.php");

    $firstname=$middlename=$lastname=$gender=$email=$address=$_FILES="";
    if(empty($_SESSION["email"])){
        header("Location:../view/login.php");
    }

    $mydb=new MyDB();
    $conobj=$mydb->openCon();
    $result=$mydb->getUserInfo("faculty",$_SESSION["email"],$conobj);
    
    if($result->num_rows>0){
        
        while($row=$result->fetch_assoc()){
            $firstname=$row["firstname"];
            $lastname=$row["lastname"];
            $email=$row["email"];
            $gender=$row["gender"];
            $address=$row["address"];
            $_FILES=$row["file"];
        }
    }
    
?>