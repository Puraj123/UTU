<?php
 session_start();
    include('./connection.php');
   // include('./second.php');
   
    
   unset($_SESSION['uname']);
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
		<form name="frm1" method="post" action="login1.php">
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
										<td colspan="3" align="center"><h1>Login Form</h1><hr /></td>

									</tr>
									<tr>
										<td>User Name</td>
										<td>:</td>
										<td><input type="text" name="uname" /></td>
									</tr>
									<tr>
										<td>Password</td>
										<td>:</td>
										<td><input type="password" name="passwd" /></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td><input type="submit" name="btn" value="Submit" /></td>
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