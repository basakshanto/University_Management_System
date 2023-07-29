<?php
include ('../control/Login_control.php');

?>

<html>
    <head>   
        <title>  
            Login Page  
        </title>  
    </head>  
    <body> 
        
        <?php
            include '..\..\Layout\header.php';
        ?>
        <h1 class="h1">Login Page</h1> 

        <form action="" method="POST">
            
            <table class="table">
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" placeholder="Email" name="email"> <?php echo $emailerror ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" placeholder="Password" name="pass"> <?php echo $passerror ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="button submit" name="login" value="Log In">
                    </td>
                    <td></td>
                    <td>
                        <a href="..\..\home.php"><input type="button" class="button" value="Back"></a>
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