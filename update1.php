<?php
	include("./connection.php");
        //include('./second.php');
	session_start();
	
	$id=$_POST['no'];
	$uname=$_POST['uname'];
	$passwd=$_POST['passwd'];
	$email=$_POST['emailid'];
	$phone=$_POST['phone'];
	
		
        $uq=mysqli_query($db,"update tbl_stud set stud_name='".$uname."',password='".$passwd."',email='".$email."',contact='".$phone."' where sid=".$id."");
        if($uq)
	{
		header("location:display.php?id=$id");
	}
	else
	{
		header("location:updatedata.php?u_no=".$id);
	}
	
?>