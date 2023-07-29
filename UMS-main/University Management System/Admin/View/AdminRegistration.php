<?php 
include '../control/process.php';
?>

<html>  
    <head>   
        <title>  
            Admin Registration Page  
        </title>
        
    </head>  
    <body>
        <?php
            include '..\..\Layout\header.php';
        ?>
       
        <h1 class="h1">Admin Registration Page</h1> 
        <div>
            
            <form  action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">  
            <br> <br>
                <table class="table">
                    <tr>
                        <td>
                            First name: 
                        </td>
                        <td>
                            <input type="text" id="fname" placeholder="First name" name="firstname" size="15"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Middle name: 
                        </td>
                        <td>
                            <input type="text" id="mname" placeholder="Middle name" name="middlename" size="15"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last name: 
                        </td>
                        <td>
                            <input type="text" id="lname" placeholder="Last name" name="lastname" size="15"/>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            Gender :
                        </td>
                        <td>
                            <input type="checkbox" id="gender" name="gender" value="male"/> Male
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input type="checkbox" id="gender" name="gender" value="female"/> Female
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input type="checkbox" id="gender" name="gender" value="other"/> Other  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone :
                        </td>
                        <td>
                            <input type="text" name="country code"  value="+880" size="2"/>   
                            <input type="text" name="phone" placeholder="1XXXXXXXXX" size="10"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Profile Picture:
                        </td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="text" id="email" placeholder="example@gmail.com" name="email"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <input type="text" name="address" placeholder="Address" />
                            
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="Password" id="pass" name="pass" placeholder="Password">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Re-type password:
                        </td>
                        <td>
                            <input type="Password" id="repass" name="repass" placeholder="Re-type password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" class="button submit" name="Submit" value="Submit"/> 
                        </td>
                        <td>
                            <input type="reset" class="button reset" name="Reset" value="Reset"/> 
                        </td>
                        <td>
                            <a href="../../RegistrationPage.php"><input type="button" class="button" value="Back"></a>
                        </td>
                    </tr>

                </table>
                
            </form>
        </div>  
         
        <br>
        <br>
        <br>
        <br>
        <?php
            include '..\..\Layout\footer.php';
        ?>

    <script src="../JavaScript/script.js"></script>
    </body>  
</html> 