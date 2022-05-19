<?php
include "db.php";

/*===================================================================================*/
/*=============================TOTAL NUMBER OF ROWS==================================*/
/*===================================================================================*/
function get_total_dept() //for department
{
    $conn=$GLOBALS['con'];
    $sql="select * from department";
    $result=$conn->query($sql);
    $arr=$result->num_rows;
    return $arr;
}
function get_total_teach() //for teacher
{
    $conn=$GLOBALS['con'];
    $sql="select * from teacher";
    $result=$conn->query($sql);
    $arr=$result->num_rows;
    return $arr;
}
function get_total_std() //for student
{
    $conn=$GLOBALS['con'];
    $sql="select * from student";
    $result=$conn->query($sql);
    $arr=$result->num_rows;
    return $arr;
}
function get_total_ntc() //for notice
{
    $conn=$GLOBALS['con'];
    $sql="select * from notice";
    $result=$conn->query($sql);
    $arr=$result->num_rows;
    return $arr;
}
function get_total_img() //for gallery
{
    $conn=$GLOBALS['con'];
    $sql="select * from gallery";
    $result=$conn->query($sql);
    $arr=$result->num_rows;
    return $arr;
}

/*===================================================================================*/
/*================================FETCH ALL TABLES===================================*/
/*===================================================================================*/
function get_depts() //for department
{
    $conn=$GLOBALS['con'];
    $sql="select * from department";
    $result=$conn->query($sql);
    $arr=array();
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           $arr[]=$row;
        }
    }
    return $arr;
}
function get_teachers() //for teacher
{
    $conn=$GLOBALS['con'];
    $sql="select * from teacher";
    $result=$conn->query($sql);
    $arr=array();
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           $arr[]=$row;
        }
    }
    return $arr;
}
function get_students() //for student
{
    $conn=$GLOBALS['con'];
    $sql="select * from student";
    $result=$conn->query($sql);
    $arr=array();
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           $arr[]=$row;
        }
    }
    return $arr;
}
function get_notices() //for notice
{
    $conn=$GLOBALS['con'];
    $sql="select * from notice";
    $result=$conn->query($sql);
    $arr=array();
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           $arr[]=$row;
        }
    }
    return $arr;
}
function get_photos() //for gallery
{
    $conn=$GLOBALS['con'];
    $sql="select * from gallery";
    $result=$conn->query($sql);
    $arr=array();
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           $arr[]=$row;
        }
    }
    return $arr;
}

/*===================================================================================*/
/*===================================ADD DATAS=======================================*/
/*===================================================================================*/
function add_d($d) //for department
{
    $conn=$GLOBALS['con'];
    $sql="insert into department values (null,?)";
    $st=$conn->prepare($sql);
    $st->bind_param("s",$d);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
function add_t($teach) //for  teacher 
{
    $n=$teach['n'];
    $e=$teach['e'];
    $c=$teach['c'];
    $d=$teach['d'];
    $s=$teach['s'];
    $sql="insert into teacher values (null,?,?,?,?,?)";
    $conn=$GLOBALS['con'];
    $st=$conn->prepare($sql);
    $st->bind_param("ssisi",$n,$e,$c,$s,$d);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}
function add_s($std) //for student
{
    $n=$std['n'];
    $e=$std['e'];
    $c=$std['c'];
    $r=$std['r'];
    $d=$std['d'];
    $a=$std['a'];
    $sql="insert into student values(null,?,?,?,?,?,?)";
    $conn=$GLOBALS['con'];
    $st=$conn->prepare($sql);
    $st->bind_param("ssiisi",$n,$e,$c,$r,$a,$d);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}
function add_n($ntc) //for notice
{
    $d=$ntc['date'];
    $s=$ntc['subject'];
    $f=$ntc['file'];
    $conn=$GLOBALS['con'];
    $sql="insert into notice values(null,?,?,?)";
    $st=$conn->prepare($sql);
    $st->bind_param("sss",$d,$s,$f);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}
function add_i($name) //for gallery
{
    $sql="insert into gallery values (null,?)";
    $conn=$GLOBALS['con'];
    $st=$conn->prepare($sql);
    $st->bind_param("s",$name);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}

/*===================================================================================*/
/*==================================DELETE DATAS=====================================*/
/*===================================================================================*/
function dlt_dept($id) //for department
{
    $conn=$GLOBALS['con'];
    $sql="delete from department where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}
function dlt_teach($id) //for teacher
{
    $conn=$GLOBALS['con'];
    $sql="delete from teacher where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}
function dlt_std($id) //for student
{
    $conn=$GLOBALS['con'];
    $sql="delete from student where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}
function dlt_ntc($id) //for notice
{
    $conn=$GLOBALS['con'];
    $sql="delete from notice where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}
function dlt_glry($id) //for gallery
{
    $conn=$GLOBALS['con'];
    $sql="delete from gallery where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    } 
}

/*===================================================================================*/
/*=====================================GET DATA======================================*/
/*===================================================================================*/
function get_dept($id) //for department
{
    $conn=$GLOBALS['con'];
    $sql="select * from department where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        $res=$st->get_result();
        if($res->num_rows>0)
        {
             $row=$res->fetch_assoc();
            return $row;
        }
    }
    else
    {
        echo $conn->errorr;  
    } 
}
function get_teach($id) //for teacher
{
    $conn=$GLOBALS['con'];
    $sql="select * from teacher where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        $res=$st->get_result();
        if($res->num_rows>0)
        {
             $row=$res->fetch_assoc();
            return $row;
        }
    }
    else
    {
        echo $conn->errorr; 
    } 
}
function get_std($id) //for student
{
    $conn=$GLOBALS['con'];
    $sql="select * from student where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        $res=$st->get_result();
        if($res->num_rows>0)
        {
             $row=$res->fetch_assoc();
            return $row;
        }
    }
    else
    {
        echo $conn->errorr; 
    } 
}
function get_ntc($id) //for notice
{
    $conn=$GLOBALS['con'];
    $sql="select * from notice where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        $res=$st->get_result();
        if($res->num_rows>0)
        {
             $row=$res->fetch_assoc();
            return $row;
        }
    }
    else
    {
        echo $conn->errorr; 
    } 
}

/*===================================================================================*/
/*===================================EDIT DATA=======================================*/
/*===================================================================================*/
function edit_dept($d) //for department
{
    $id=$d['i'];
    $dep=$d['d'];
    $conn=$GLOBALS['con'];
    $sql="update department set Department=? where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("si",$dep,$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
function edit_teach($t) //for teacher
{
    $id=$t['i'];
    $n=$t['n'];
    $e=$t['e'];
    $c=$t['c'];
    $d=$t['d'];
    $s=$t['s'];
    $conn=$GLOBALS['con'];
    $sql="update teacher set Name=?,Email=?,Contact=?,Dept_Id=?,Subject=? where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("ssissi",$n,$e,$c,$d,$s,$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
function edit_std($s) //for student 
{
    $id=$s['i'];
    $n=$s['n'];
    $e=$s['e'];
    $c=$s['c'];
    $r=$s['r'];
    $d=$s['d'];
    $a=$s['a'];
    $conn=$GLOBALS['con'];
    $sql="update student set Name=?,Email=?,Contact=?,Roll=?,Address=?,Dept_Id=? where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("ssiisii",$n,$e,$c,$r,$a,$d,$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
function edit_ntc($n) //for notice 
{
    $id=$n['id'];
    $d=$n['date'];
    $s=$n['subject'];
    $f=$n['file'];
    $conn=$GLOBALS['con'];
    $sql="update notice set Notice_date=?,Subject=?,File=? where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("sssi",$d,$s,$f,$id);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
?>