<?php
	//include('./connection.php');
        include('lock.php');
        //include('./second.php');
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
		<form name="frm1" method="post" action="updatedata.php">
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
										<td colspan="3" align="center"><h1>Updating Data</h1><hr /></td>

									</tr>
									<?php
										$q=mysqli_query($db,"select sid from tbl_stud");
									?>
										<tr>
											<td>ID</td>
											<td>:</td>
											<td><select name="u_no">
											<?php 
												while($data = mysqli_fetch_array($q))
												{
											?>
												<option value="<?php echo $data['sid']; ?>" name="u_no"><?php echo $data['sid']; ?>
											<?php
												}
											?>
											</select></td>
										
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
							Copyright@2014
						</td>
					</tr>
				</table>
			</center>
		</form>
	</body>
</html>