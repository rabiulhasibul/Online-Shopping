<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<title>Clean Blog Template</title>
<link href="library_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_menu" style="background: #007ACC; ">
                
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Shoping.php">Shopping</a></li>
            <li><a href="Customer_Care.php"  class="current">Customer Care</a></li>
        </ul>	
    
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="index.php" target="_parent">Online <strong>Shopping</strong><span>Get your desire</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			session_start();
			if(!isset($_SESSION['name']) && !isset($_SESSION['password']))
			{		
				?>
				<!-- Starting of Login Form -->
					<div class="form">
						<p style="color:green">Please choose one of the following-</p>
						<table>						
								<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<tr>
									<td><a href="Login.php" style="color:blue">Log in</a></td>
								</tr>
								<tr><td></td></tr>
								<tr>
									<td><a href="Create_Account.php" style="color:blue">Create New Account</a></td>
								</tr>				
								<tr><td></td></tr>		
								</form>
						</table>
					</div>
			
				<?php
			}
			else {
			?>
			<!-- Starting of Login Form -->
					<div class="form">
						<p style="color:green">Welcome, <?php echo "<b>" . $_SESSION['name'] . "</b>" ?>!</p>
						<table>						
								<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<tr>
									<td><a href="Shoping.php" style="color:blue">Purchase Product</a></td>
								</tr>
								<tr><td></td></tr>
								<tr>
									<td><input type="submit" name="my_profile" value="View Profile" /></td>
								</tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr>
									<td>
										<input type="Submit" name="Logout" value="Logout"/>
									</td>
								</tr>		
								</form>
						</table>
					</div>
			<?php
			}
		}	 
		else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		session_start();
		if(isset($_REQUEST['Logout']))
		{
			logout();
		}
		if(isset($_REQUEST['my_profile']))
		{
			//header('Location: http://localhost/shopping/Customer_Care.php');
		//exit();
			show_profile();
		}
		
	}
	?>
	<!-- End of Login Form -->
		</div>
  </div> 
    <!-- end of templatemo_main -->
  
  	<div id="templatemo_footer">
		Copyright © 2014. All rights reserved by Md. Rabiul Islam
    </div>
	</div> <!-- end of warpper -->
	
	<?php
	function logout()
	{
		unset($_SESSION['name']);
		unset($_SESSION['password']);
		header('Location: http://localhost/shopping/Customer_Care.php');
		exit();
	}
	
	function show_profile()
	{
		?> <p><a href="Customer_Care.php"  style="color:blue"> << Back</a></p>	<?php
		
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('shopping', $con);
		$result = mysql_query("SELECT * FROM transaction WHERE user_name='". $_SESSION['name'] ."'");
		
		?><p style="color:green"><b> <?php echo $_SESSION['name']; ?> </b>, Personal Profile <hr /></p><?php
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>You do not bought any product:</p>";
		else
		{
			
			?><p style="text-align:center; color:blue"><b>Sold product list:</b><hr /></p><?php
			$total_cost = 0;
			 do
			{
			?> <div class="post_section">
			<?php
			echo "<table>";
			  echo "<tr>";
			  echo "<td>Product Name:</td>" ;
			  echo "<td><b>" . $row['p_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Stock:</td>" ;
			  echo "<td><b>" . $row['quantity'] . "kg</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Total Price:</td>" ;
			  echo "<td><b>" . $row['total_price'] . " tk</b></td>";
			  echo "<td>";
			  
			  $total_cost += (int)$row['total_price'];
			  
			echo "</table>";
			?>
			</div><?php
			}while($row = mysql_fetch_array($result));
			
			echo "Total cost: " . $total_cost;
		}
		mysql_close($con);
	}
	
	function remove_book_from_sell_list()
	{
		echo "have to remove product:";
	}
	
	?>

</body>
</html>