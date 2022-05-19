<?php
include "dao.php";
/*===================================================================================*/
/*======================================ADD DATAS====================================*/
/*===================================================================================*/
    if(isset($_POST['ad'])) //for department
    {
        $d=$_POST['dept'];
        if(add_d($d))
        {
            header("Location:3-dept.php");
        }
        else
        {
            header("Location:add_dept.php");
        }
    }
    if(isset($_POST['at'])) //for teacher
    {
        $n=$_POST['name'];
        $e=$_POST['email'];
        $c=$_POST['cont'];
        $d=$_POST['dept'];
        $s=$_POST['sub'];
        $teach=array("n"=>$n,"e"=>$e,"c"=>$c,"d"=>$d,"s"=>$s);
        if(add_t($teach))
        {
            header("location:4-teach.php");
        }
        else
        {
            header("location:add_tech.php");
        }
    }
    if(isset($_POST['as'])) //for student
    {
        $n=$_POST['name'];
        $e=$_POST['email'];
        $c=$_POST['cont'];
        $r=$_POST['roll'];
        $d=$_POST['dept'];
        $a=$_POST['adrs'];
        $std=array("n"=>$n,"e"=>$e,"c"=>$c,"r"=>$r,"d"=>$d,"a"=>$a);
        if(add_s($std))
        {
            header("location:5-std.php");
        }
        else
        {
            header("location:add_std.php");
        }
    }
    if(isset($_POST['an']) && $_FILES['doc']) //for notice
    {
        $d=$_POST['date'];
        $s=$_POST['sub'];
        //file details
        $file=$_FILES['doc'];
        $name=$file['name'];
        $type=$file['type'];
        $size=$file['size'];
        $error=$file['error'];
        $tmp_name=$file['tmp_name'];
        if($error==0)
        {
            if($size<5550000)
            {
                $ext=pathinfo($name,PATHINFO_EXTENSION);
                $ext_low=strtolower($ext);
                $n_name=uniqid("File-",true).".".$ext_low;
                $ntc=array("date"=>$d,"subject"=>$s,"file"=>$n_name);
                if(add_n($ntc))
                {
                    if(move_uploaded_file($tmp_name,"img/notice/".$n_name))
                    {
                        header("location:6-ntc.php");
                    }
                    else
                    {
                        header("location:add_ntc.php");
                    }
                }
                else
                {
                    echo "<script>alert('data not inserted');</script>";
                }
            }
            else
            {
                echo "<script>alert('it is exist maximum size');</script>";
            }
        }
        else
        {
            echo "<script>alert('something went wrong');</script>";
        }
    }
    if(isset($_POST['ai']) && $_FILES['img']) //for gallery
    {
        $file=$_FILES['img'];
        $name=$file['name'];
        $type=$file['type'];
        $size=$file['size'];
        $error=$file['error'];
        $tmp_name=$file['tmp_name'];
        if($error==0)
        {
            if($size<276480000)
            {
                $ext=pathinfo($name,PATHINFO_EXTENSION);
                $ext_low=strtolower($ext);
                $n_name=uniqid("IMG-",true).".".$ext_low;
                if(add_i($n_name))
                {
                    if(move_uploaded_file($tmp_name,"img/gallery/".$n_name))
                    {
                        header("location:7-glry.php");
                    }
                    else
                    {
                        header("location:add_img.php");
                    }
                }
                else
                {
                    echo "<script>alert('data not inserted');</script>";
                }
            }
            else
            {
                echo "<script>alert('it is exist maximum size');</script>";
            }
        }
        else
        {
            echo "<script>alert('something went wrong');</script>";
        }
    }

/*===================================================================================*/
/*==================================DELETE DATAS=====================================*/
/*===================================================================================*/
    if(isset($_GET['name'])=="dlt-dept") //for department
    {
        $id=$_GET['id'];
        if(dlt_dept($id))
        {
            header("Location:3-dept.php");
        }
        else
        {
            echo "<script>alert('Data cannot delete');</script>";
        }
    }
    if(isset($_GET['name'])=="dlt-teach") //for teacher
    {
        $id=$_GET['id'];
        if(dlt_teach($id))
        {
            header("Location:4-teach.php");
        }
        else
        {
            echo "<script>alert('Data cannot delete');</script>";
        }
    }
    if(isset($_GET['name'])=="dlt-std") //for student
    {
        $id=$_GET['id'];
        if(dlt_std($id))
        {
            header("Location:5-std.php");
        }
        else
        {
            echo "<script>alert('Data cannot delete');</script>";
        }
    }
    if(isset($_GET['name'])=="dlt-ntc") //for notice
    {
        $id=$_GET['id'];
        if(dlt_ntc($id))
        {
            header("Location:6-ntc.php");
        }
        else
        {
            echo "<script>alert('Data cannot delete');</script>";
        }
    }
    if(isset($_GET['name'])=="dlt-img") //for gallery
    {
        $id=$_GET['id'];
        if(dlt_glry($id))
        {
            header("Location:7-glry.php");
        }
        else
        {
            echo "<script>alert('Data cannot delete');</script>";
        }
    }
    
/*===================================================================================*/
/*=====================================EDIT DATAS====================================*/
/*===================================================================================*/
    if(isset($_POST['ed'])) //for department
    {
        $i=$_POST['id'];
        $d=$_POST['dept'];
        $dept=array("d"=>$d,"i"=>$i);
        if(edit_dept($dept))
        {
            header("Location:3-dept.php");
        }
        else
        {
            header("Location:edit_dept.php");
        }
    }
    if(isset($_POST['et'])) //for teacher
    {
        $i=$_POST['id'];
        $n=$_POST['name'];
        $e=$_POST['email'];
        $c=$_POST['cont'];
        $d=$_POST['dept'];
        $s=$_POST['sub'];
        $teach=array("i"=>$i,"n"=>$n,"e"=>$e,"c"=>$c,"d"=>$d,"s"=>$s,);
        if(edit_teach($teach))
        {
            header("Location:4-teach.php");
        }
        else
        {
            header("Location:edit_teach.php");
        }
    }
    if(isset($_POST['es'])) //for student
    {
        $i=$_POST['id'];
        $n=$_POST['name'];
        $e=$_POST['email'];
        $c=$_POST['cont'];
        $r=$_POST['roll'];
        $d=$_POST['dept'];
        $a=$_POST['adrs'];
        $std=array("i"=>$i,"n"=>$n,"e"=>$e,"c"=>$c,"r"=>$r,"d"=>$d,"a"=>$a,);
        if(edit_std($std))
        {
            header("Location:5-std.php");
        }
        else
        {
            header("Location:edit_std.php");
        }
    }
    if(isset($_POST['en'])) //for notice
    {
        $i=$_POST['id'];
        $d=$_POST['date'];
        $s=$_POST['sub'];
        $file=$_FILES['doc'];
        $name=$file['name'];
        $type=$file['type'];
        $size=$file['size'];
        $error=$file['error'];
        $tmp_name=$file['tmp_name'];
        if($error==0)
        {
            if($size<5550000)
            {
                $ext=pathinfo($name,PATHINFO_EXTENSION);
                $ext_low=strtolower($ext);
                $n_name=uniqid("File-",true).".".$ext_low;
                $ntc=array("id"=>$i,"date"=>$d,"subject"=>$s,"file"=>$n_name);
                if(edit_ntc($ntc))
                {
                    if(move_uploaded_file($tmp_name,"img/notice/".$n_name))
                    {
                        header("location:6-ntc.php");
                    }
                    else
                    {
                        header("location:edit_ntc.php");
                    }
                }
                else
                {
                    echo "<script>alert('data not inserted');</script>";
                }
            }
            else
            {
                echo "<script>alert('it is exist maximum size');</script>";
            }
        }
        else
        {
            echo "<script>alert('something went wrong');</script>";
        }
    }
?>