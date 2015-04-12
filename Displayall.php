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
	
			
		</style>
	</head>
	<body>
		<form name="frm1" method="post" action="insert.php">
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
						<td colspan="6">
							<center>
                                                            <br>
                                                            <table border="1" style="width: 400px; background-color: lightgray">
                                                                <tr>
                                                                    <td>
                                                                        <h2><center>Student Data</center></h2>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" style="width: 400px">
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>Password</th>
										<th>Email ID.</th>
										<th>Phone No.</th>
									</tr>
                                                                        <tr><td colspan="5"><hr></td></tr>
									
                                                                            <?php
										//$iid=$_REQUEST['id'];
                                                                                $sid=$_REQUEST['id'];
                                                                                $query=mysqli_query($db,"select * from tbl_stud where sid='$sid'");
                                                                                while($data=mysqli_fetch_array($query))
                                                                                { ?>
                                                                                <tr>
                                                                                    <td><center><?php echo $data['sid'];?></td>
                                                                                    <td><center><font color="Red" size="4px"><?php echo $data['stud_name']; ?></td>
                                                                                    <td><center><?php echo $data['password']; ?></td>
                                                                                    <td><center><?php echo $data['email']; ?></td>
                                                                                    <td><center><?php echo $data['contact'];?></td>
                                                                                </tr>
                                                                            <?php
                                                                             
                                                                                }?>
                                                                            
                                                                           <!-- <?php
										
										$sql="select * from tbl_stud ";
                                                                                $result=$db->query($sql);
										while($data=$result->fetch_array())
										{
                                                                                    print '<tr>';
                                                                                    print '<td>'.$data[0].'</td>';
                                                                                    print '<td>'.$data[1].'</td>';
                                                                                    print '<td>'.$data[2].'</td>';
                                                                                    print '<td>'.$data[3].'</td>';
                                                                                    print '<td>'.$data[4].'</td>';
                                                                                    print '<tr>';
                                                                             
										/*<td><center><?php echo $data['sid'];?></td>
										<td><center><?php echo $data['stud_name']; ?></td>
										<td><center><?php echo $data['password']; ?></td>
										<td><center><?php echo $data['email']; ?></td>
										<td><center><?php echo $data['contact'];?></td> */
									
									
										}?>
                                                                               <?php  
                                                                                $query2="select count(*) from tbl_stud";
                                                                                $result1=$db->query($query2);
                                                                                $get_total_row = $result1->fetch_row();

                                                                               ?>
										
                                                                                <tr>
                                                                                    <td colspan="5">
                                                                                        <?php echo"number of row is :";?>
                                                                                        <?php print_r($get_total_row) ;?>
                                                                                    </td>
                                                                                </tr>-->
								</table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            
                                                            <br>
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