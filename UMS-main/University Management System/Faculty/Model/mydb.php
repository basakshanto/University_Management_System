<?php
class MyDB{

    function openCon(){
        $conn = new mysqli("localhost","root","","Project");
        return $conn;
    }
    function insertData($tablename,$firstname,$lastname,$gender,$phone,$email,$address,$eduq,$pdep,$tex,$psub,$pass,$file,$conn){
        $sql="INSERT INTO $tablename (Firstname,Lastname,Gender,Phone,Email,Address,Education_quali,
        Preferable_dept,Teaching_exp,Preferable_sub,Password,File) 
        VALUES ('$firstname','$lastname','$gender','$phone','$email','$address','$eduq','$pdep','$tex','$psub',
        '$pass','$file')";
        $result=$conn->query($sql);
        return $result;
    }
    function checkUser($tablename, $email, $pass, $conn){
        $sql="SELECT * FROM $tablename WHERE email='$email' AND 
        Password='$pass'";
        $result=$conn->query($sql);
    return $result;
    }

    function getUserInfo($tablename,$email,$conn){
        $sql="SELECT * FROM $tablename WHERE email='$email'";
        $result=$conn->query($sql);
        return $result; 
    }


    function updateFaculty($tablename,$conn,$firstname,$lastname,$gender,$phone,$address,$email,
    $pass){
        $sql="UPDATE $tablename SET firstname='$firstname',lastname='$lastname',gender='$gender',phone='$phone',address='$address',
        password='$pass'WHERE Email='$email'";
        $result=$conn->query($sql);
        return $result;
    }

}


?>