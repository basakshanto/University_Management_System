<html> 
    
    <head>
        <title>  
            Home Page
        </title>
    </head>

    <body class="body">
        <?php
            include 'Layout\header.php';
        ?>
        <h1 class="h1">Login as</h1>  
        <Form >
            <table class="table">
                <br>
                <br>
                <br>
                <br>
                
                <tr>
                    <td>
                        <img src="Data\Admin.PNG" alt="Admin" width = "140" height = "120">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td>
                        <img src="Data\Faculty.jpg" alt="Faculty" width = "140" height = "120">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td>
                        <img src="Data\student.PNG" alt="Student" width = "140" height = "120">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td>
                        <img src="Data\Staff.jpg" alt="Stuff" width = "140" height = "120">
                    </td>
                </tr>
                <tr>
                    <td><a href="Admin/View/login.php"><h2>Admin</h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td><a href="Faculty/View/login.php"><h2>Faculty</h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td><a href=""><h2>Student</h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td><a href=""><h2>Staff</h2></td>
                </tr>
            </table>
        </Form>
        <h3 class="h1" ><a href="RegistrationPage.php">Haven't ragistration yet? Resgistration from here.</a></h3>
        <br>
        <br>
        <br>
        <br>
        <?php
            include 'Layout\footer.php';
        ?>
    </body>
</html>
