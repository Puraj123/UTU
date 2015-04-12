<?php
	include("./connection.php");
        //include('./second.php');
	session_start();
	
	echo $id=$_POST['u_no'];
	
		
		$sql=mysqli_query($db,"delete from tbl_stud where sid=".$id."");
		if($sql)
		{
			header("location:display.php");
		}
		else
		{
			header("location:delete.php");
		}
	
?>