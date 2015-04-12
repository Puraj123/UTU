<?php
    include('./connection.php');
    //include('./second.php');
    session_start();
    $uname=$_SESSION['uname'];
    $query=  mysqli_query($db,"select * from tbl_stud where stud_name='.$uname.'");
    $udata=  mysqli_fetch_array($query);
    $uname=$udata['stud_name'];
    $a=$_SESSION['ID'];
    if(!isset($_SESSION['uname']))
    {
        
        header("location:index.php");
    }
?>

