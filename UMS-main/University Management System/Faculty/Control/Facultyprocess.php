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
    $lnameerror="";
    $gendererror="";
    $phoneerror="";
    $emailerror="";
    $_FILESerror="";
    $writteneror="";
    $addresserror="";
    $eduqerror="";
    $pdeperror="";
    $texerror="";
    $psuberror="";
    $passerror="";

    if(isset($_REQUEST["Submit"]))
    {
        $fname=$_REQUEST["firstname"];
        $haserror=0;
        if(empty($fname))
        {
            $fnameerror= "name not found";
            $haserror=1;
        }
        else{
            $fnameerror= "your first name is ". $fname;

        }


        $lname = $_REQUEST["lastname"];
        if(empty($lname))
        {
            $lnameerror= "name not found";
            $haserror=1;
        }
        else{
            $lnameerror= "your last name is ". $lname;

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
        
        $eduq = $_REQUEST["eduq"];
        if(empty($eduq))
        {
            $eduqerror= "your education qualification is not found";
            $haserror=1;
        }
        else{
            $eduqerror= "your education qualification is ". $eduq;

        }

        $pdep = $_REQUEST["pdep"];
        if(empty($pdep))
        {
            $pdeperror= "Preferable department not found";
            $haserror=1;
        }
        else{
            $pdeperror= "your preferable department is ". $pdep;

        }

        $tex = $_REQUEST["tex"];
        if(empty($tex))
        {
            $texerror= "your teaching experience is not found";
            $haserror=1;
        }
        else{
            $texerror= "your teaching experience is ". $tex;

        }

        $psub = $_REQUEST["psub"];
        if(empty($psub))
        {
            $psuberror= "your preferable subject is not found";
            $haserror=1;
        }
        else{
            $psuberror= "your preferable subject is ". $psub;

        }

        $pass = $_REQUEST["pass"];
        if(empty($pass))
        {
            $passerror= "your password invalid";
            $haserror=1;
        }
        else{
            $passerror= "your password is ". $pass;

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
            $result=$mydb->insertData("faculty",$_REQUEST["firstname"],$_REQUEST["lastname"],
            $_REQUEST["gender"],$_REQUEST["phone"],$_REQUEST["email"],$_REQUEST["address"],$_REQUEST["eduq"],
            $_REQUEST["pdep"],$_REQUEST["tex"],$_REQUEST["psub"],$_REQUEST["pass"],
            "../uploads/".$_REQUEST["email"].".jpg",$conobj);
            if($result===TRUE)
            {
                echo "Success";
            }
            else
            {
                echo "Error".$conobj->error;
            }



            /*$existingdata=file_get_contents("../data/jsondata.json");
            $phpdata=json_decode($existingdata);
                $formdata=array(
                    "fname"=>$_REQUEST["firstname"],
                    "lname"=>$_REQUEST["lastname"],
                    "gender"=>$_REQUEST["gender"],
                    "phone"=>$_REQUEST["phone"],
                    "address"=>$_REQUEST["address"],
                    "email"=>$_REQUEST["email"],
                    "eduq"=>$_REQUEST["eduq"],
                    "pdep"=>$_REQUEST["pdep"],
                    "tex"=>$_REQUEST["tex"],
                    "psub"=>$_REQUEST["psub"],
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
            }*/

        }


    }

?>