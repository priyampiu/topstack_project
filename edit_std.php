<?php
session_start();
if(!isset($_SESSION['un']))
{
    header("Location:1-login.php");
}
include "dao.php";
$id=$_GET['id'];
$s=get_std($id);
?>
<!DOCTYPE html>
<html lang="en">
    <section class ="showcase">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link rel="stylesheet" href="css/add_edit_std.css"/>
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
                    <div class="content">
                        <header>Add Student</header>
                    </div>
                    <form class="signUp" action="control.php" method="post">
                            <div class="formGroup">
                                <i class="fa fa-user"></i>
                                <input type="text" name="name" placeholder="Enter Your Name" value="<?=$s['Name'];?>" required/>
                            </div>
                            <div class="formGroup">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email"  placeholder="Enter Email Id." value="<?=$s['Email'];?>" required/>
                            </div>
                            <div class="formGroup">
                                <i class="fa fa-phone"></i>
                                <input type="text" name="cont"  placeholder="Enter Contact No." value="<?=$s['Contact'];?>" required/>
                            </div>
                            <div class="formGroup">
                                <i class="bi bi-123"></i>
                                <input type="text" name="roll"  placeholder="Enter Roll No." value="<?=$s['Roll'];?>" required/>
                            </div>
                            <div class="formGroup">
                                <i class="bi bi-layers-fill"></i>
                                <input type="text" name="dept" placeholder="Enter Department" value="<?=$s['Dept_Id'];?>" required/>
                            </div>
                            <div class="formGroup">
                                <i class="bi bi-house-fill"></i>
                                <input type="text" name="adrs" placeholder="Enter Address" value="<?=$s['Address'];?>" required />
                            </div>
                            <br>
                            <input type="hidden" name="id" value="<?=$s['ID'];?>" class="btn2">
                            <input type="submit" name="es" value="EDIT" class="btn2">
                        </form>
               </div>
            </div>
        </body>
    </section>
</html> 