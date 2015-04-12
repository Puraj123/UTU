<?php
	include("./connection.php");
        //include('./second.php');
        session_start();
	$uname=$_POST['uname'];
        $password=$_POST['passwd'];
        $ipaddress = '';
        $time=date("Y/m/d H:i:s"); // date and time in a single variable
        if (getenv('HTTP_CLIENT_IP'))
        {
            $ipaddress = getenv('HTTP_CLIENT_IP');
        }
        else if(getenv('HTTP_X_FORWARDED_FOR'))
        {
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        }
        else if(getenv('HTTP_X_FORWARDED'))
        {
            $ipaddress = getenv('HTTP_X_FORWARDED');
        }
        else if(getenv('HTTP_FORWARDED_FOR'))
        {
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        }
        else if(getenv('HTTP_FORWARDED'))
        {
            $ipaddress = getenv('HTTP_FORWARDED');
        }
        else if(getenv('REMOTE_ADDR'))
        {
            $ipaddress = getenv('REMOTE_ADDR');
        }
        else
        {
            $ipaddress = 'UNKNOWN'; // final ip address
        }
	$q=mysqli_query($db,"select sid from tbl_stud where stud_name='".$uname."' and password='".$password."'");
	if($q)
	{
		$data=mysqli_fetch_array($q);
		$a=$data['sid'];
		$_SESSION['ID']=$a;
                echo  $_SESSION['uname']=$uname;
		echo $a;
		if($a >"0")
		{
                        $q1=  mysqli_query($db,"insert into ipaddress values('','$ipaddress','$time')");
			header("location:home.php");
		}
		else
		{
			header("location:index.php");
		}
	}
	else
	{
		header("location:index.php");
        }