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
            <li><a href="Shoping.php">shopping</a></li>
            <li><a href="Customer_Care.php"  class="current">Customer Care</a></li>
        </ul>	
    
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="index.php" target="_parent">Online <strong>shopping</strong><span>Get your desire</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
		<p><a href="Customer_Care.php"  style="color:blue"> << Back</a></p>
		<br />
		<?php
		 if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		 if (isset($_COOKIE["name"])){
				header('Location: http://localhost/shopping/choose_product.php');
				exit(  );
			}
		?>
        <!-- Starting of Login Form -->
            <div class="form">
				<p style="color:green">Please enter your User Name and Password</p>
				<table>						
						<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
						<tr>
							<td>User Name: </td>
							<td><input type="text" name="name" placeholder="User Name" required="required"/></td>
						</tr>
						<tr><td></td></tr>
						<tr>
							<td>Password: </td>
							<td><input type="password" name="password" placeholder="Password" required="required"/></td>
						</tr>				
						<tr><td></td></tr>						
						<tr>
							<td><input type="checkbox" name="remember" value="YES"/>Remember Me</td>
							<td><input type="submit" value="Log in" /> </td>
						</tr>
						<tr><td></td></tr>
						</form>
				</table>
			</div>
	
	<?php
	 } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('shopping', $con);
		$result = mysql_query("SELECT * FROM user_info");
		
		while($row = mysql_fetch_array($result))
		{
			if($_POST['name'] == $row['name'])
			{
				if($_POST['password'] == $row['password'])
				{
					echo "Welcome!" . $row['name'];
					if( isset( $_POST['remember'] ) ) {
					 setcookie("user", $_POST['name'], time()+(15*24*3600));
					}
					
					
					session_start();
					$_SESSION['name'] = $_POST['name'];
					$_SESSION['password'] = $_POST['password'];
					
					header('Location: http://localhost/shopping/Customer_Care.php');
					exit(  );
				}
				else echo "Please enter your User Name and Password correctly.";
				break;
			}
	  }	
	  if(!($_POST['name'] == $row['name']))
		{
			if(!($_POST['password'] == $row['Password']))
				{
					echo "Please enter your User Name and Password correctly.";
				}
				//else echo "Name Only Matched";
		}
		

		mysql_close($con);


	}
	?>
	<!-- End of Login Form -->
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>
  
  	<div id="templatemo_footer">
    
		Copyright © 2014. All rights reserved by Md. Rabiul Islam
        
    </div>
  
    <div class="cleaner"></div>
</div> <!-- end of warpper -->
</body>
</html>