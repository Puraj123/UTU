<?php
	include('lock.php');
        //include('./second.php');
        //include('./connection.php');
	//session_start();
?>
<html>
	<head>
		<title>
			Sample Form using css
		</title>
		<style>
			h1{
				color:blue;
				font-size:60px;
			}
			.link
			{
				background-color:orange;
				height:40px;
				text-align:center;
				
				
			}
			.home
			{
				font-size:60px;
				color:silver;
				text-align:center;
			}
			.footer
			{
				background-color:gray;
				text-align:right;
			}
			.home:hover
			{
					color:green;
			}
			input:focus
			{
				background:gray;
			}
	
			
		</style>
	</head>
	<body>
		<form name="frm1" method="post" action="update1.php">
			<center>
				<table width="1024px" border="1">
					<tr style="background-color:gray">
						<td align="center" colspan="6">
							<h1>Uka Tarsadia University</h1>
						</td>
					</tr>
					<tr>
						<td colspan="6">
						</td>
					</tr>
					<tr class="link">
						<td>
							<a href="home.php">HOME</a>
						</td>
						<td>
							<a href="insert.php">INSERT</a>
						</td>
						<td>
							<a href="update.php">UPDATE</a>
						</td>
						<td>
							<a href="delete.php">DELETE</a>
						</td>
						<td>
							<a href="display.php">DISPLAY</a>
						</td>
                                                <td>
							<a href="index.php">LOGOUT</a>
						</td>
					</tr>
					<tr>
						<td colspan="6">
						</td>
					</tr>
					<tr>
						<td colspan="6" style="padding-left:15px" >
							<center>
								<table>
									<tr>
										<td colspan="3" align="center"><h1>Update Data ..</h1><hr /></td>

									</tr>
									<?php
										$i=$_REQUEST['u_no'];
										
										$q=mysqli_query($db,"select * from tbl_stud where sid='".$i."'");
										$date=mysqli_fetch_array($q);
									
									?>
										<tr>
											<td>ID</td>
											<td>:</td>
											<td><input type="text" name="no" value="<?php echo $date['sid']; ?>"/></td>
										</tr>
										<tr>
											<td>User Name</td>
											<td>:</td>
											<td><input type="text" name="uname" value="<?php echo $date['stud_name']; ?>"/></td>
										</tr>
										<tr>
											<td>Password</td>
											<td>:</td>
											<td><input type="password" name="passwd" value="<?php echo $date['password']; ?>"/></td>
										</tr>
										<tr>
											<td>Email ID</td>
											<td>:</td>
											<td><input type="text" name="emailid" value="<?php echo $date['email']; ?>"/></td>
										</tr>
										<tr>
											<td>Phone No.</td>
											<td>:</td>
											<td><input type="text" name="phone" value="<?php echo $date['contact']; ?>"/></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td><input type="submit" name="btn1" value="Submit" /></td>
										</tr>
									
									
								</table>
							</center>
							
						</td>
					</tr>
					<tr class="footer">
						<td colspan="6">
							Copyright@2015
						</td>
					</tr>
				</table>
			</center>
		</form>
	</body>
</html>