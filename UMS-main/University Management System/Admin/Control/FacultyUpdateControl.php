<?php
    include ("../model/mydb.php");

    $selected="";
    $email = $_REQUEST["email"];

    $mydb = new MyDB();
    $conobj = $mydb->openCon();
    $result = $mydb->getUserinfo("faculty",$email,$conobj);

    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            $fname=$row["Firstname"]; 
            $lname=$row["Lastname"];
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