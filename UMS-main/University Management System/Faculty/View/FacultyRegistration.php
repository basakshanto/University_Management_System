<?php 
include '../control/Facultyprocess.php';
?>

<html>  
    <head>   
        <title>  
            Registration Page  
        </title>  
    </head>  
    <body>

        <?php
            include '..\..\Layout\header.php';
        ?>
        <h1 class="h1">Faculty Registration Page</h1>   
        <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateFrom()">  
        <br> <br>
            <table class="table">
                <tr>
                    <td>
                        First name: 
                    </td>
                    <td>
                        <input type="text" name="firstname" size="15"/>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Last name: 
                    </td>
                    <td>
                        <input type="text" name="lastname" size="15"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender :
                    </td>
                    <td>
                        <input type="checkbox" name="gender" value="male"/> Male
                    </td>
                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="checkbox" name="gender" value="female"/> Female
                    </td>
                </tr>
                <tr>
                    <td>
                        
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
                        <input type="text" id="email" name="email"/> 
                    </td>
                </tr>

                <tr>
                    <td>
                        Address:
                    </td>
                    <td>
                        <input type="text"  name="address"/> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Education Qualification:
                    </td>
                    <td>
                        <select name="eduq" id="eduq">
                            <option value="default">----</option>
                            <option value="Doctorate">Doctorate</option>
                            <option value="Msc">MSc</option>
                            <option value="MBA">MBA</option>
                            <option value="MA">MA</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        Preferable Department:
                    </td>
                    <td>
                        <select name="pdep" id="pdep">
                            <option value="default">----</option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="IPE">IPE</option>
                            <option value="BBA">BBA</option>
                            <option value="LLB">LLB</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        Teaching Experience:
                    </td>
                    <td>
                        <select name="tex" id="tex">
                            <option value="default">----</option>
                            <option value="0 years">0 years</option>
                            <option value="1 years">1 years</option>
                            <option value="2 years">2 years</option>
                            <option value="3 years">3 years</option>
                            <option value="More than 3 years">More than 3 years</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        Preferable Subject:
                    </td>
                    <td>
                        <select name="psub" id="psub">
                            <option value="default">----</option>
                            <option value="Algorithm">Algorithm</option>
                            <option value="Micro processor">Micro processor</option>
                            <option value="Introduction to industrial engineering">Introduction to industrial engineering</option>
                            <option value="Management">Management</option>
                            <option value="Jurisprudence">Jurisprudence</option>
                        </select>
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
                         Re-type password:
                    </td>
                    <td>
                        <input type="Password" id="repass" name="repass">
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
                        <a href="..\..\RegistrationPage.php"><input type="button" class="button" value="Back"></a>
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
        <script src="..\JavaScript\JavaScript.js"></script> 
    </body>  
</html> 