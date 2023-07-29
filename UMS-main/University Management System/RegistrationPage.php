 
<html> 
    
    <head>
        <title>  
            Registration Page
        </title>
    </head>

    <body>
        <?php
            include 'Layout\header.php';
        ?>
        
        <h1 class="h1">Register as</h1>
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
                    <td></td>
                    <td></td>
                    <td>
                        <img src="Data\Staff.jpg" alt="Stuff" width = "140" height = "120">
                    </td>
                </tr>
                <tr>
                    <td><a href="Admin/View/AdminRegistration.php"><h2>Admin</h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="Faculty/View/FacultyRegistration.php"><h2>Faculty</h2></td>
                    <td></td>
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td><a href=""><h2>Staff</h2></td>
                </tr>
                
            </table>
            <a href="home.php"><h2 class="h1">Back</h2></a>
        </Form>

        <br>
        <br>
        <br>
        <br>
        <?php
            include 'Layout\footer.php';
        ?>
    </body>
</html>
