<html >
<head>
<title>Online shopping</title>
<link href="library_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_menu" style="background: #007ACC; ">
                
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Shoping.php" class="current">Shopping</a></li>
            <li><a href="Customer_Care.php">Customer Care</a></li>
        </ul>	
    
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="index.php" target="_parent">Online <strong>Shopping</strong><span>Get your desire</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        <div id="templatemo_sidebar">
    	
            <div id="templatemo_rss">
                <a href="Customer_Care.php">JOIN NOW <br /><span>Be with us</span></a>    
            </div>
            
            <h4>Categories</h4>
            <ul class="templatemo_list">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<li><input type="submit" name="Meat" value="Meat" /></li>
				<li><input type="submit" name="Fruit" value="Fruit" /></li>
				<li><input type="submit" name="Flower" value="Flower" /></li>
				<li><input type="submit" name="Other" value="Other" /></li>
				</form>
            </ul>
			
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
        
        <div id="templatemo_main">
			<!-- Buying form -->
			<?php 
			session_start();
			if(isset($_SESSION['name'])){
			?>
				<div class="form">
				<p style="color:green">Please enter your Product Name and Quatity</p>
				<table>						
						<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
						<tr>
							<td>Product Name: </td>
							<td><input type="text" name="p_name" placeholder="Product Name" required="required"/></td>
						</tr>
						<tr><td></td></tr>
						<tr>
							<td>Quantity: </td>
							<td><input type="number" name="quantity" placeholder="Quantity" required="required"/></td>
						</tr>				
						<tr><td></td></tr>						
						<tr>
							<td></td>
							<td><input type="submit" name="buy" value="Buy" /> </td>
						</tr>
						<tr><td></td></tr>
						</form>
				</table>
			</div>
			
			<?php
			}
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				//echo "get method is calling";
				?>
				
				<?php
				//session_start();
				faculty_of_meat();
				?>
				<!--<div class="post_section">
				
					
				</div> -->
				
				<?php 
			}
			else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				//session_start();
				if(isset($_REQUEST['Meat']))
				{
					//logout();
					faculty_of_meat();
				}
				if(isset($_REQUEST['Fruit']))
				{
					//show_profile();
					faculty_of_fruit();
				}
				if(isset($_REQUEST['Flower']))
				{
					//show_profile();
					faculty_of_flower();
				}
				if(isset($_REQUEST['Other']))
				{
					//show_profile();
					faculty_of_other();
				}
				if(isset($_REQUEST['buy']))
				{
					buy_product();
				}
			
			}
			?>
            
		</div>
    
  </div> 
    <!-- end of templatemo_main -->
  
  	<div id="templatemo_footer">    
		Copyright © 2014. All rights reserved by Md. Rabiul Islam
    </div>
  
</div> <!-- end of warpper -->

	<?php 
	function faculty_of_meat()
	{
		
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		
		//session_start();
		mysql_select_db('shopping', $con);
		$result = mysql_query("SELECT * FROM p_info WHERE category='Meat'");
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no Meat.</p>";
		else
		{
			
			?><p style="text-align:center; color:blue"><b></b><hr /></p><?php
			
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
			  echo "<td><b>" . $row['stock'] . "kg</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Per Unit Price:</td>" ;
			  echo "<td><b>" . $row['unit_price'] . " tk</b></td>";
			  echo "<td></td>";
			  echo "</tr>";
			   echo "<tr>";
			  echo "<td>Discount:</td>" ;
			  echo "<td><b>" . $row['discount'] . " tk</b></td>";
			  echo "<td></td>";
			  echo "</tr>";
			echo "</table>";
			?>
			</div><?php
			}while($row = mysql_fetch_array($result));
			
		}
		mysql_close($con);
	}
	
	function faculty_of_fruit()
	{
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('shopping', $con);
		$result = mysql_query("SELECT * FROM p_info WHERE category='Fruit'");
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no FRUIT.</p>";
		else
		{
			
			?><p style="text-align:center; color:blue"><b>FRUIT</b><hr /></p><?php
			
			 do
			{
			?> <div class="post_section"><p>
			<?php
			echo "<table>";
			  echo "<tr>";
			  echo "<td>Product Name:</td>" ;
			  echo "<td><b>" . $row['p_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Stock:</td>" ;
			  echo "<td><b>" . $row['stock'] . "kg</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Per Unit Price:</td>" ;
			  echo "<td><b>" . $row['unit_price'] . " tk</b></td>";
			  echo "<td></td>";
			  echo "</tr>";
			  echo "<td>Discount:</td>" ;
			  echo "<td><b>" . $row['discount'] . " tk</b></td>";
			  echo "<td></td>";
			  echo "</tr>";
			echo "</table>";
			?>
			</p></div><?php
			}while($row = mysql_fetch_array($result));
			
		}
		mysql_close($con);
	}
	function faculty_of_other()
	{
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('shopping', $con);
		$result = mysql_query("SELECT * FROM p_info WHERE category='Other'");
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no FRUIT.</p>";
		else
		{
			
			?><p style="text-align:center; color:blue"><b>Other</b><hr /></p><?php
			
			 do
			{
			?> <div class="post_section"><p>
			<?php
			echo "<table>";
			  echo "<tr>";
			  echo "<td>Product Name:</td>" ;
			  echo "<td><b>" . $row['p_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Stock:</td>" ;
			  echo "<td><b>" . $row['stock'] . "kg</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Per Unit Price:</td>" ;
			  echo "<td><b>" . $row['unit_price'] . " tk</b></td>";
			  echo "<td></td>";
			  echo "</tr>";
			  echo "<td>Discount:</td>" ;
			  echo "<td><b>" . $row['discount'] . " tk</b></td>";
			  echo "<td></td>";
			  echo "</tr>";
			echo "</table>";
			?>
			</p></div><?php
			}while($row = mysql_fetch_array($result));
			
		}
		mysql_close($con);
	}
	
	function faculty_of_flower()
	{
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('shopping', $con);
		$result = mysql_query("SELECT * FROM p_info WHERE category='Flower'");
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no FLOWER.</p>";
		else
		{
			
			?><p style="text-align:center; color:blue"><b>FLOWER</b><hr /></p><?php
			
			 do
			{
			?> <div class="post_section"><p>
			<?php
			echo "<table>";
			  echo "<tr>";
			  echo "<td>Product Name:</td>" ;
			  echo "<td><b>" . $row['p_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Stock:</td>" ;
			  echo "<td><b>" . $row['stock'] . " pieces</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Per Unit Price:</td>" ;
			  echo "<td><b>" . $row['unit_price'] . " tk</b></td>";
			  echo "<td></td>";
			  echo "</tr>";
			  echo "<td>Discount:</td>" ;
			  echo "<td><b>" . $row['discount'] . " tk</b></td>";
			  echo "<td></td>";
			  echo "</tr>";
			echo "</table>";
			?>
			</p></div><?php
			}while($row = mysql_fetch_array($result));
			
		}
		mysql_close($con);
	}
	
	function buy_product()
	{
		$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('shopping', $con);
		
		$taken_table = mysql_query("SELECT * FROM p_info WHERE p_name='" . $_POST['p_name'] . "'");
		$row = mysql_fetch_array($taken_table);
		
		$tp = (int)$row['unit_price'];
		$p = (int)$_POST['quantity'];
		$r=(int)$row['discount'];
		$q = (int)$row['stock'];
		
		$q = $q - $p;
		if($q >= 0){
			
			//mysql_query($con,"UPDATE p_info SET stock=$q WHERE p_name=". $_POST['p_name']);
			$robiul = "UPDATE p_info SET stock=$q WHERE p_name='". $_POST['p_name'] . "'";
			if (!mysql_query($robiul, $con))
			{
				echo "unable to update";
				die('Error: ' . mysql_error());
			}
			//mysql_query("UPDATE p_info SET stock=$q WHERE p_name=". $_POST['p_name']);
			
			$time = date("d/m/y G:i:s", time());
			$p = ($tp-$r)*$p;
			$user_info="INSERT INTO transaction (user_name, p_name, quantity, total_price, date, delivery)
			VALUES
			('$_SESSION[name]', '$_POST[p_name]', '$_POST[quantity]', '$p', '$time', '$time')";

			if (!mysql_query($user_info, $con))
			{
			  echo "unable to insert transaction";
			  die('Error: ' . mysql_error());				  
			}

			echo "Product name: ". $_POST['p_name'] . "<br />Quantity: " . $_POST['quantity'] . " is bought successfully.";
		}
		else 
		{
			$robiul = "UPDATE p_info SET stock=100 WHERE p_name='". $_POST['p_name'] . "'";
			if (!mysql_query($robiul, $con))
			{
				echo "unable to update";
				die('Error: ' . mysql_error());
			}
			echo "Product name: ". $_POST['p_name'] . "<br />Quantity: " . $_POST['quantity'] . " is bought successfully.";
			//echo "Product name: ". $_POST['p_name'] . "<br />Quantity: " . $_POST['quantity'] . " is not availabel. Please reduce quantity.";
		}
	}
	?>
</body>
</html>