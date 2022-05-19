<?php 
session_start();
if(!isset($_SESSION['un'])){
    header("Location:1-login.php");
}
include "dao.php"; 

/*call all methods for get total number of rows in all tables*/
$d=get_total_dept();
$t=get_total_teach();
$s=get_total_std();
$n=get_total_ntc();
$g=get_total_img();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>College Admin Panel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/2_dash.css">
    </head>

    <body>
        <!--for side navbar-->
        <section id="menu"> 
            <div class="logo">
                <img src="img/tpi.jpg" alt="">
                <p>TPI Admin</p>
            </div>
            <div class="items">
                <li><i class="bi bi-pie-chart-fill"><a href="2-dash.php">Dasboard</a></i></li>
                <li><i class="bi bi-layers-fill"><a href="3-dept.php">Departments</a></i></li>
                <li><i class="bi bi-briefcase-fill"><a href="4-teach.php">Teachers</a></i></li>
                <li><i class="bi bi-mortarboard-fill"><a href="5-std.php">students</a></i></li>
                <li><i class="bi bi-calendar-date-fill"><a href="6-ntc.php">Notices</a></i></li>
                <li><i class="bi bi-image-fill"><a href="7-glry.php">Gallery</a></i></li>
            </div>
        </section>
        <!--for top navbar-->
        <section id="interface">
            <div class="navigation">
                <div class="n1">
                    <div>
                        <i id="menu-btn" class="bi bi-list"></i>
                    </div>
                    <div class="search">
                            <i class="bi bi-search"></i>
                            <input type="text" name="search" placeholder="Search">
                    </div>
                </div>
                <div class="profile">
                    <div class="dropdown">
                        <button class="btn btn-secondary " type="button" style="background-color:white; box-shadow:none; border:none;" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a href="profile.php" class="dropdown-item" >Profile</a></li>
                            <li><a href="log_in_out.php?name=<?='out';?>" class="dropdown-item">Logout</a></li>
                        </ul>
                    </div>  
                </div>
            </div>
            <!--for body part-->
            <h1 class="i-name">Dashboard</h1>
            <div class="values">
                <!--for department-->
                <div class="val-box">
                    <i class="bi bi-layers-fill"></i>
                    <div>
                        <h3><?=$d;?></h3>
                        <span>Total Departments</span>
                    </div>
                </div>
                <!--for teacher-->
                <div class="val-box">
                    <i class="bi bi-briefcase-fill"></i>
                    <div>
                        <h3><?=$t;?></h3>
                        <span>Total Teachers</span>
                    </div>
                </div>
                <!--for student-->
                <div class="val-box">
                    <i class="bi bi-mortarboard-fill"></i>
                    <div>
                        <h3><?=$s;?></h3>
                        <span>Total Students</span>
                    </div>
                </div>
                <!--for notice-->
                <div class="val-box">
                    <i class="bi bi-calendar-date-fill"></i>
                    <div>
                        <h3><?=$n;?></h3>
                        <span>Total Notices</span>
                    </div>
                </div>
                <!--for gallery-->
                <div class="val-box">
                    <i class="bi bi-image-fill"></i>
                    <div>
                        <h3><?=$g;?></h3>
                        <span>Total Photos</span>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $('#menu-btn').click(function(){
                $('#menu').toggleClass("active");
            })
        </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" ></script>
    </body>
</html>