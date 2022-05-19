<?php
session_start();
if(!isset($_SESSION['un']))
{
    header("Location:1-login.php");
}
include "dao.php";
$id=$_GET['id'];
$n=get_ntc($id); 
?>
<!DOCTYPE html>
<html lang="en">
    <section class ="showcase">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link rel="stylesheet" href="css/add_edit_ntc.css"/>
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
                        <header>Add Notice</header>
                    </div>
                    <form class="signUp" action="control.php" method="post" enctype="multipart/form-data">
                            <div class="formGroup">
                                <i class="bi bi-calendar-date-fill"></i>
                                <input type="text" name="date" placeholder="Enter Notice Date" value="<?=$n['Notice_Date'];?>" required/>
                            </div>
                            <div class="formGroup">
                                <i class="bi bi-chat-right-text-fill"></i>
                                <input type="text" name="sub"  placeholder="Enter Notic Subject" value="<?=$n['Subject'];?>"  required/>
                            </div>
                            <div class="formGroup">
                                <i class="bi bi-file-earmark-fill"></i>
                                <input type="file"  name="doc"  accept=".jpg, .jpeg, .pdf" >    
                            </div>
                            <br>
                            <input type="hidden" name="id" value="<?=$n['ID'];?> class="btn2">
                            <input type="submit" name="en" value="EDIT" class="btn2">
                    </form>
                </div>
            </div>
        </body>
    </section>
</html> 