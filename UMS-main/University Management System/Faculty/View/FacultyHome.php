<html>  
    <head>   
        <title>  
            Faculty Home Page  
        </title>
    </head>  
    <body>
        <?php
            include '..\..\Layout\header.php';
        ?>
        <h3 class="h1">Welcome to Home</h3>
        <div class="faculty_home">

            <div class="section">
                    <ul>
                        <li><a href="FacultyProfile.php">View Profile</a></li>
                    </ul>
            </div>
            <div class="section">
                    <ul>
                        <li><a href="FacultyUpdate.php">Update Profile</a></li>
                    </ul>
            </div>
            <div class="section">
                    <ul>
                        <li><a href="AssignedSection.php">View All Section</a></li>
                    </ul>
            </div>
            <div class="section">
                    <ul>
                        <li><a href="AssignedCourse.php">View All Course </a></li>
                    </ul>
            </div>
        </div>

        <a href="..\Control\logout.php"><input type="button" class="button reset" value="logout"></a>
        <br>
        <?php
            include '..\..\Layout\footer.php';
        ?>
    </body>
</html>