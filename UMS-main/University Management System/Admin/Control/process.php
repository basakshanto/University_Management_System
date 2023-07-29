<?php
    include("../model/mydb.php");
    $printcookie="";
    setcookie("visit","1",time()+36000);
    if(isset($_COOKIE["visit"]))
    {
        $printcookie= "visited";
    }
    else
    {
        $printcookie= "welcome";
    }

    $fnameerror="";
    $mnameerror="";
    $lnameerror="";
    $gendererror="";
    $phoneerror="";
    $emailerror="";
    $_FILESerror="";
    $writteneror="";
    $addresserror="";
    $passerror="";
    $repasserror="";

    if(isset($_REQUEST["Submit"]))
    {
        $fname=$_REQUEST["firstname"];
        $haserror=0;
        if(empty($fname))
        {
            $fnameerror= "first name not found";
            $haserror=1;
        }
        else{
            $fnameerror= "your first name is ". $fname;

        }

        $mname = $_REQUEST["middlename"];
        if(empty($mname))
        {
            $mnameerror= "middle name not found";
            $haserror=1;
        }
        else{
            $mnameerror= "your middle name is ". $mname;

        }

        $lname = $_REQUEST["lastname"];
        if(empty($lname))
        {
            $lnameerror= "last name not found";
            $haserror=1;
        }
        else{
            $lnameerror= "your last name is ". $lname;

        }

        
        if(isset($_REQUEST["gender"]))
        {
            $gender = $_REQUEST["gender"];    
            $gendererror= "your gender is ". $gender;
        }
        else{
            $gendererror= "your gender is not set";
            $haserror=1;
        }

        $phone = $_REQUEST["phone"];
        if(empty($phone))
        {
            $phoneerror= "number not found";
            $haserror=1;
        }
        else{
            $phoneerror= "your number is ". $phone;

        }

        $address = $_REQUEST["address"];
        if(empty($address))
        {
            $addresserror= "Address not found";
            $haserror=1;
        }
        else{
            $addresserror= "your address is ". $address;

        }

        $email = $_REQUEST["email"];
        if(!empty($email))
        {
            if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
            {
                $emailerror = "please enter a valid email address";
                $haserror=1;
            }
            else{
                $emailerror = "your email address is ". $email;
            }
        }
        else{
            $emailerror= "Enter your email address";
            $haserror=1;

        }

        $pass = $_REQUEST["pass"];
        if(empty($pass))
        {
            $passerror= "Password not found";
            $haserror=1;
        }
        else{
            $passerror= "your password is ". $pass;

        }

        $repass = $_REQUEST["repass"];
        if(empty($repass))
        {
            $repasserror= "Re-Password not found";
            $haserror=1;
        }
        else{
            $repasserror= "your re-password is ". $repass;

        }


        if(empty($_FILES["image"]["name"]))
        {
            $_FILESerror= "enter a file";
            $haserror=1;
        }
        else{
            $_FILESerror = "".$_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$email.".jpg");
        }
        if($haserror==0)
        {
            $mydb= new MyDB();
            $conobj= $mydb->openCon();
            $result=$mydb->insertData("Admin",$_REQUEST["firstname"],$_REQUEST["middlename"],$_REQUEST["lastname"],
            $_REQUEST["gender"],$_REQUEST["phone"],$_REQUEST["address"],$_REQUEST["email"],$_REQUEST["pass"],
            "../uploads/".$_REQUEST["email"].".jpg",$conobj);
            if($result===TRUE)
            {
                echo "Success";
            }
            else
            {
                echo "Error".$conobj->error;
            }
        }
        /*{
            $existingdata=file_get_contents("../data/jsondata.json");
            $phpdata=json_decode($existingdata);
                $formdata=array(
                    "fname"=>$_REQUEST["firstname"],
                    "mname"=>$_REQUEST["middlename"],
                    "lname"=>$_REQUEST["lastname"],
                    "gender"=>$_REQUEST["gender"],
                    "phone"=>$_REQUEST["phone"],
                    "address"=>$_REQUEST["address"],
                    "email"=>$_REQUEST["email"],
                    "password"=>$_REQUEST["pass"],
                    "file"=>"../uploads/".$_REQUEST["email"].".jpg",
                );
                $phpdata[]=$formdata;

                $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);

            if(file_put_contents("../data/jsondata.json",$jsondata))
            {
                $writteneror= "file written successfully";
            }
            else{
                $writteneror= "file written failed";
            }

        }*/


    }

?>