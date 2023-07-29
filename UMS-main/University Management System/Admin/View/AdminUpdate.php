<?php 
include '../control/AdminUpdateControl.php';
?>

<html>  
    <head>   
        <title>  
            Admin Details Update Page  
        </title>  
    </head>  
    <body>

        <?php
            include '..\..\Layout\header.php';
        ?>
        <h1 class="h1">Admin Update Page</h1>   
        <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">  
        <br> <br>
            <table class="table">
                <tr>
                    <td>
                        First name: 
                    </td>
                    <td>
                        <input type="text" name="firstname" value="<?php echo $fname;?>" size="15"/> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Middle name: 
                    </td>
                    <td>
                        <input type="text" name="middlename" value="<?php echo $mname ?>" size="15"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Last name: 
                    </td>
                    <td>
                        <input type="text" name="lastname" value="<?php echo $lname ?>" size="15"/>
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
                        <input type="text" name="phone" size="10"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        Address:
                    </td>
                    <td>
                        <input type="text" id="address" name="address"/>
                        
                    </td>
                </tr>

                <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="text" id="email" name="email"/>
                        </td>
                    </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="Password" id="pass" name="pass">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Update" class="button submit" value="Update"/> 
                    </td>
                    
                    <td>
                        <a href="ShowAlladmin.php"><input type="button" class="button" value="Back"></a>
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