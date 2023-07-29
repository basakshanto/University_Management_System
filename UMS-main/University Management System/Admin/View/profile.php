<?php
    include '..\Control\profile_process.php';
?>

<html>
    <head>   
        <title>  
             Profile Page  
        </title>
    <body class="body"> 
        <?php
            include '..\..\Layout\header.php';
        ?> 
        <br>
        <div >
            <form action="" method="POST" enctype="multipart/form-data">
            hellow user
                <?php
                    echo $_SESSION["email"];
                ?>
                <br>
                <br>
                <br>

                <br>First Name:<?php echo $fname;?>
                <br>Middle Name:<?php echo $mname;?>
                <br>Last Name:<?php echo $lname;?>
                <br>Email:<?php echo $email;?>
                <br>Gender:<?php echo $gender;?>
                <br>Address:<?php echo $address;?>
                <br>Profile Picture:
                <br><img src="<?php echo $_FILES;?>" width="100px" height="100px">
                <br>
                <br>
                <tr>
                    <td><a href="AdminHome.php"><input type="button" class="button reset" value="Back"></a></td>
                </tr>
                <?php
                    include '..\..\Layout\footer.php';
                ?>
            </form>
        </div>
    <body>
</html>