<?php
    session_start();
    include("../model/mydb.php");

    if(empty($_SESSION["email"])){
        header("Location:../view/login.php");
    }

    $selected="";
    $email = $_SESSION["email"];

    $mydb = new MyDB();
    $conobj = $mydb->openCon();
    $result = $mydb->getUserInfo("faculty",$email,$conobj);

    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            $firstname=$row["Firstname"]; 
            $lastname=$row["Lastname"];
            $gender=$row["Gender"];
            $phone=$row["Phone"]; 
            $address=$row["Address"]; 
            $pass=$row["Password"];
        }

    }


    if(isset($_REQUEST["Update"]))
    {
        $mydb = new Mydb();
        $conobj = $mydb->openCon();
        $result=$mydb->updateFaculty("faculty",$conobj,  
        $_REQUEST["firstname"], 
        $_REQUEST["lastname"],
        $_REQUEST["gender"],
        $_REQUEST["phone"],
        $_REQUEST["address"],  
        $_REQUEST["pass"],
        $_REQUEST['email']);

        echo"success";
    }
?>