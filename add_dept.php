<?php
session_start();
if(!isset($_SESSION['un']))
{
    header("Location:1-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <section class ="showcase">
        <head>
            <title>College Admin Panel</title>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link rel="stylesheet" href="css/add_edit_dept.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">      
        </head>
        <body>
            <video src="img/log.mp4" muted loop autoplay></video>
            <div class="overlay"></div>
            <div class="container">
                <div class="form">
                    <br>
                    <div class="content">
                        <header>Add Department</header>
                    </div>
                    <form class="signUp" action="control.php" method="post" enctype="multipart/form-data">
                        <div class="formGroup">
                            <i class="bi bi-layers-fill"></i>
                            <input type="text" name="dept" placeholder="Enter New Department" required/>
                        </div>
                        <br>
                        <input type="submit" name="ad" value="ADD" class="btn2">
                </div>
            </div>
        </body>
    </section>
</html> 