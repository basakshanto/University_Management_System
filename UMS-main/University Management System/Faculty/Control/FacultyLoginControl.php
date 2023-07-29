<?php
session_start();
include "../model/mydb.php";
if(!empty($_SESSION["email"]))
{
    header("Location: ../view/profile.php");
}


$emailerror="";
$passerror="";
if(isset($_REQUEST["login"]))
{
    $match=0;
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    if(empty($email))
    {
       $emailerror = "Please enter your email address".$email;
    }
    
    elseif(empty($pass))
    {
       $passerror = "Please enter your password".$pass;
    }
    else{
        $mydb= new MyDB();
        $conobj=$mydb->openCon();
        $result=$mydb->checkUser("Faculty",$_REQUEST["email"], $_REQUEST["pass"],
        $conobj);  
        if($result->num_rows >0)
        {
            $_SESSION["email"]=$_REQUEST["email"];
            header("Location: ../view/profile.php");
        } 
        else
        {
            echo "Please correct email and password";
        }




        /*$filedata=file_get_contents("../data/jsondata.json");
        $phpobj=json_decode($filedata);
        foreach($phpobj as $myobj)
        {
            if($myobj->email==$_REQUEST["email"] && $myobj->password==$_REQUEST["password"])
            {
            
                $match=1;
            }
        }
        if($match==1)
        {
           header("Location: ../view/profile.php");
        }
        else{
            echo "login failed";
        }*/

    }

}


?>