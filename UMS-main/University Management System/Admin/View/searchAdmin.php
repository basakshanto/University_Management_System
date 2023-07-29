<?php
    include "..\Control\searchUser.php"
?>

<html>
    <head>
        <title>
            Search admin
        </title>
        <script src="/Project/Admin/JavaScript/script.js"></script>
    </head>
    <body>
        <?php
            include '..\..\Layout\header.php';
        ?>

        <H1>Search admin</H1>
        <form>
            <input type="text" id="email" name="email" placeholder="enter admin's email">
            <input type="button" onclick="search()" value="Search">

            <p id="print"></p>
            <a href="AdminHome.php"><input type="button" class="button" value="Back"></a>
        </form> 
        
        <?php
            include '..\..\Layout\footer.php';
        ?>
    </body>
</html>
