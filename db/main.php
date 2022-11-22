<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Own page</title>
        <link rel="stylesheet" href="design.css">
    </head>

    <body>
        <header>
            
            <a href="http://www.cdsga-system.com/website/site/main.php" target="_blank" class="brand"><img src="images/cdsga_logo2.png" alt="" >Colegio De San Gabriel Arcangel</a>
            <div class="menu">
    
                <a href="Students.html">Students</a>
                <a href="Teachers.html">Teachers</a>
                <a href="Staff.html">Staffs</a>
                <a href="logout.php">Logout<a>
            </div>
        </header>
        <section class="section-main">
            <h1> DBMS PROJECT ONLY</h1>
        </section>
        <div class="footer">
            <p align="center">@Copyright 2022 - created by howard timblaco</p>
        </div>
        
    </body>
</html>
<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
