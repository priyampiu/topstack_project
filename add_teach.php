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
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link rel="stylesheet" href="css/add_edit_teach.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
            <title>College Admin Panel</title>
        </head>
        <body>
            <video src="img/log.mp4" muted loop autoplay></video>
            <div class="overlay"></div>
            <div class="container">
                <div class="form">
                    <br>
                    <br>
                    <div class="content">
                        <header>Add Teacher</header>
                    </div>
                    <form class="signUp" action="control.php" method="post">
                            <div class="formGroup">
                                <i class="fa fa-user"></i>
                                <input type="text" name="name" placeholder="Enter Your Name" required/>
                            </div>
                            <div class="formGroup">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email"  placeholder="Enter Email Id."  required/>
                            </div>
                            <div class="formGroup">
                                <i class="fa fa-phone"></i>
                                <input type="text" name="cont"  placeholder="Enter Contact No."  required/>
                            </div>
                            <div class="formGroup">
                                <i class="bi bi-layers-fill"></i>
                                <input type="text" name="dept" placeholder="Enter Department"  required/>
                            </div>
                            <div class="formGroup">
                                <i class="bi bi-chat-right-text-fill"></i>
                                <input type="text" name="sub" placeholder="Enter Subject" required />
                            </div>
                            <br>
                               <input type="submit" name="at" value="ADD" class="btn2">
                        </form>
               </div>
            </div>
        </body>
    </section>
</html> 