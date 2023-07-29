<?php
    include "..\Control\show_all_user_process.php"
?>

<html>
    <head>   
        <title>  
             All Admin page  
        </title> 
    </head>  
    <body> 
        <?php
            include '..\..\Layout\header.php';
        ?>
        <h1 class="h1">All Admin's Details</h1> 
        <br>
        <?php
            if($result->num_rows>0){
                echo "<table class='table'>";
                echo "<tr><th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email</th> <th>Gender</th> <th>Address</th> <th>File</th></tr>";
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["Firstname"]."</td>";
                    echo "<td>".$row["Middlename"]."</td>";
                    echo "<td>".$row["Lastname"]."</td>";
                    echo "<td>".$row["Email"]."</td>";
                    echo "<td>".$row["Gender"]."</td>";
                    echo "<td>".$row["Address"]."</td>";
                    echo "<td>".$row["File"]."</td>" ;
                    echo "<td>"."<a href ='AdminUpdate.php?email=".$row["Email"]."'><input type='button' class='button edit' value='Edit'></a>"."</td>" ;
                    echo "<td>"."<a href ='AdminDelete.php?email=".$row["Email"]."'><input type='button'class='button reset' value='Delete'></a>"."</td>" ;
                    echo "</tr>";
                    
                }
                echo "</tr>";
            }
            else{
                echo "No data found.";
            }
        ?>

        <tr>
            <td><a href="AdminHome.php"><input type="button" class="button" value="Back"></a></td>
        </tr>
        <?php
            include '..\..\Layout\footer.php';
        ?>
    <body>
</html>