<?php
    include ("../model/mydb.php");

    $selected="";
    $email = $_REQUEST["email"];

    $mydb = new MyDB();
    $conobj = $mydb->openCon();
    $result = $mydb->getUserinfo("admin",$email,$conobj);

    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            $fname=$row["Firstname"];
            $mname=$row["Middlename"]; 
            $lname=$row["Lastname"];
            $gender=$row["Gender"];
            $phone=$row["Phone"]; 
            $address=$row["Address"]; 
            $password=$row["pass"];
        }

    }


    if(isset($_REQUEST["Update"]))
    {

        $mydb = new Mydb();
        $conobj = $mydb->openCon();
        $result=$mydb->updateAdmin("admin",$conobj, $_REQUEST["firstname"],
        $_REQUEST["middlename"], 
        $_REQUEST["lastname"],
        $_REQUEST["gender"],
        $_REQUEST["phone"],
        $_REQUEST["address"], 
        $_REQUEST["email"], 
        $_REQUEST["pass"],);
        echo"Success";
    }
?>