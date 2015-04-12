<?php
	include("./connection.php");
        //include('./second.php');
	$uname=$_POST['uname'];
	$passwd=$_POST['passwd'];
	$email=$_POST['emailid'];
	$phone=$_POST['phone'];
        
        $query= mysqli_query($db,"insert into tbl_stud values('','$uname','$passwd','$email','$phone');");
        
        if($query)
        {
            header("location:display.php");
            //echo "data insert..";
        }
        else
        {
            echo "some thing wrong...!!";
        }
        
?>