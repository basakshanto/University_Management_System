<?php
class MyDB{

    function openCon(){
        $conn = new mysqli("localhost","root","","Project");
        return $conn;
    }
    function insertData($tablename,$firstname,$middlename,$lastname,$gender,$phone,$address,$email,
    $pass,$file,$conn){
        $sql="INSERT INTO $tablename (Firstname,Middlename,Lastname,Gender,Phone,Address,Email,pass
        ,File) VALUES ('$firstname','$middlename','$lastname','$gender','$phone','$address','$email',
        '$pass','$file')";
        $result=$conn->query($sql);
        return $result;
    }
    function checkUser($tablename, $email, $pass, $conn){
        $sql="SELECT * FROM $tablename WHERE Email='$email' AND 
        pass='$pass'";
        $result=$conn->query($sql);
        return $result;
    }

    function getUserInfo($tablename,$email,$conn){
        $sql="SELECT * FROM $tablename WHERE Email='$email'";
        $result=$conn->query($sql);
        return $result; 
    }

    function getAllUsers($tablename,$conn){
        $sql="SELECT * FROM $tablename";
        $result=$conn->query($sql);
        return $result;
    }

    function updateAdmin($tablename,$conn,$firstname,$middlename,$lastname,$gender,$phone,$address,$email,
    $pass){
        $sql="UPDATE $tablename SET firstname='$firstname',middlename='$middlename',lastname='$lastname',gender='$gender',phone='$phone',address='$address',
        pass='$pass' WHERE Email='$email'";
        $result=$conn->query($sql);
        return $result;
    }

    function updateFaculty($tablename,$conn, $firstname,$lastname,$gender,$phone,$address,$email,
    $pass){
        $sql="UPDATE $tablename SET firstname='$firstname',lastname='$lastname',gender='$gender',phone='$phone',address='$address',
        password='$pass'WHERE Email='$email'";
        $result=$conn->query($sql);
        return $result;
    }

    function deleteUser($tablename, $conn, $email){
        $sql= "DELETE FROM $tablename WHERE Email = '$email' ";
        $result=$conn->query($sql);
        return $result;
    }

    function searchUser($tablename, $conn, $email)
    {
        $sql="SELECT * FROM $tablename WHERE Email = '$email'";
        $result = $conn->query($sql);
        return $result;
    }

}


?>