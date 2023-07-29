<?php 
include '../control/FacultyUpdateControl.php';
?>

<html>  
    <head>   
        <title>  
            Faculty Details Update Page  
        </title>  
    </head>  
    <body>

        <?php
            include '..\..\Layout\header.php';
        ?>
        <h1 class="h1">Faculty Update Page</h1>   
        <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">  
        <br> <br>
            <table class="table">
                <tr>
                    <td>
                        First name: 
                    </td>
                    <td>
                        <input type="text" name="firstname" placeholder="<?php echo $firstname;?>" size="15"/> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Last name: 
                    </td>
                    <td>
                        <input type="text" name="lastname" placeholder="<?php echo $lastname ?>" size="15"/>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        Gender :
                    </td>
                    <td>
                        <input type="checkbox" name="gender" value="male"
                        <?php if ($gender=="male")
                        echo "checked";
                        ?>/> Male
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="checkbox" name="gender" value="female"
                        <?php if ($gender=="female")
                        echo "checked";
                        ?>/> Female
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="checkbox" name="gender" value="other"
                        <?php if ($gender=="other")
                        echo "checked";
                        ?>/> Other  
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Phone :
                    </td>
                    <td>
                        <input type="text" name="country code"  value="+880" size="2"/>   
                        <input type="text" name="phone" placeholder="<?php echo $phone ?>" size="10"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        Address:
                    </td>
                    <td>
                        <input type="text" id="address" placeholder="<?php echo $address ?>" name="address"/>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        Address:
                    </td>
                    <td>
                        <input type="text" id="email" placeholder="<?php echo $email ?>" name="email"/>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="Password" id="pass" placeholder="<?php echo $pass ?>" name="pass">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Update" class="button submit" value="Update"/> 
                    </td>
                    
                    <td>
                        <a href="FacultyHome.php"><input type="button" class="button" value="Back"></a>
                    </td>
                </tr>

            </table>
             
        </form> 
        <br>
        <br>
        <br>
        <br>
        <?php
            include '..\..\Layout\footer.php';
        ?>
    </body>  
</html> 