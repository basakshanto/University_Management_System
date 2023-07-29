<html>  
    <head>   
        <title>  
            Admin Home Page  
        </title>
    </head>  
    <body>
        <?php
            include '..\..\Layout\header.php';
        ?>
        <div class="admin_home">

            <div class="section">
                    <h3>Admin</h3>
                    <ul>
                        <li><a href="ShowAlladmin.php">View All Admin</a></li>
                        <li><a href="profile.php">View Profile</a></li>
                        <li><a href="searchAdmin.php">Search Admin</a></li>
                    </ul>
            </div>
            <div class="section">
                    <h3>Student</h3>
                    <ul>
                        <li><a href="#">View All Student</a></li>
                        <li><a href="#">Student Result</a></li>
                        <li><a href="#">Search Student</a></li>
                    </ul>
            </div>
            <div class="section">
                    <h3>Faculty</h3>
                    <ul>
                        <li><a href="ShowAllFaculty.php">View All Faculty</a></li>
                        <li><a href="#">Search Faculty</a></li>
                    </ul>
            </div>
            <div class="section">
            
                    <h3>Staff</h3>
                    <ul>
                        <li><a href="#">View All Staff</a></li>
                        <li><a href="#">Search Staff</a></li>
                    </ul>

            </div>

        </div>

        <a href="..\Control\logout.php"><input type="button" class="button reset" value="logout"></a>

        <br>
        <br>
        <?php
            include '..\..\Layout\footer.php';
        ?>
    </body>
</html>