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
				<li><input type="submit" name="OTHER" value="OTHER" /></li>
				</form>
            </ul>
			
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
        
        <div id="templatemo_main">
			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				//echo "get method is calling";
				session_start();
				faculty_of_meat();
				?>
				<!--<div class="post_section">
				
					
				</div> -->
				
				<?php 
			}
			else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				session_start();
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
				/*$con = mysql_connect('localhost', 'root', '');
				mysql_select_db('online_library', $con);
				$buy_faculty = "";
				$result = mysql_query("SELECT * FROM Faculty_of_EEE");
				
				while($row = mysql_fetch_array($result))
				{
					if(isset($_REQUEST[$row['book_name']]))
					{
						$buy_faculty = "Faculty_of_EEE";
						
						$taken_table = mysql_query("SELECT * FROM sell" . $_SESSION['name']);
		
						$query = "INSERT INTO `buy" . $_SESSION['name'] . "`
						(buy_category, buy_book_name, buy_writer, buy_price, buy_from)
						VALUES ('Faculty_of_EEE','".$row['book_name']."','".$row['writer_name']."', '".$row['price']."', '".$row['owner']."')";
						
						if (!mysql_query($query, $con))
						{
						  echo "Please try with another username";
						  //header('Location: http://localhost/Online_Library/Create_Account.php');
						  //exit(  );
						  die('Error: ' . mysql_error());				  
						}
						
						$taken_table = mysql_query("SELECT * FROM buy_transaction");
		
						$query2 = "INSERT INTO `buy_transaction`
						(book_name, writer_name, price, category, seller, buyer)
						VALUES ('".$row['book_name']."','".$row['writer_name']."','".$row['price']."','Faculty_of_EEE','".$row['owner']."','".$_SESSION['name']."')";
						
						if (!mysql_query($query2, $con))
						{
						  echo "Please try with another username";
						  //header('Location: http://localhost/Online_Library/Create_Account.php');
						  //exit(  );
						  die('Error: ' . mysql_error());				  
						}
						
						$sql2="DELETE FROM Faculty_of_EEE WHERE book_name='" . $row['book_name'] . "'" . "AND owner='" . $_SESSION['name'] . "'";

						if (!mysql_query($sql2,$con))
						{				
						  die('Sorry! We are unable to delete your book from faculty table.<br /> ' . mysql_error());
						}
						
						echo "<b>" . $row['book_name'] . "</b>, is bought successfully.";
						break;
					}
				}
				if($buy_faculty == "")
				{
					//echo "faculty not found yet.";
					$result = mysql_query("SELECT * FROM Faculty_of_CE");
				
					while($row = mysql_fetch_array($result))
					{
						if(isset($_REQUEST[$row['book_name']]))
						{
							//echo "matched with " . $row['book_name'];
							$buy_faculty = "Faculty_of_CE";
							
							$taken_table = mysql_query("SELECT * FROM sell" . $_SESSION['name']);
			
							$query = "INSERT INTO `buy" . $_SESSION['name'] . "`
							(buy_category, buy_book_name, buy_writer, buy_price, buy_from)
							VALUES ('Faculty_of_CE','".$row['book_name']."','".$row['writer_name']."', '".$row['price']."', '".$row['owner']."')";
							
							if (!mysql_query($query, $con))
							{
							  echo "Please try with another username";
							  //header('Location: http://localhost/Online_Library/Create_Account.php');
							  //exit(  );
							  die('Error: ' . mysql_error());				  
							}
							
							$taken_table = mysql_query("SELECT * FROM buy_transaction");
			
							$query2 = "INSERT INTO `buy_transaction`
							(book_name, writer_name, price, category, seller, buyer)
							VALUES ('".$row['book_name']."','".$row['writer_name']."','".$row['price']."','Faculty_of_CE','".$row['owner']."','".$_SESSION['name']."')";
							
							if (!mysql_query($query2, $con))
							{
							  echo "Please try with another username";
							  //header('Location: http://localhost/Online_Library/Create_Account.php');
							  //exit(  );
							  die('Error: ' . mysql_error());				  
							}
							
							$sql2="DELETE FROM Faculty_of_CE WHERE book_name='" . $row['book_name'] . "'" . "AND owner='" . $_SESSION['name'] . "'";

							if (!mysql_query($sql2,$con))
							{				
							  die('Sorry! We are unable to delete your book from faculty table.<br /> ' . mysql_error());
							}
							
							echo "<b>" . $row['book_name'] . "</b>, is bought successfully.";
							break;
						}
					}
				}
				if($buy_faculty == "")
				{
					//echo "faculty not found yet.";
					$result = mysql_query("SELECT * FROM Faculty_of_ME");
				
					while($row = mysql_fetch_array($result))
					{
						if(isset($_REQUEST[$row['book_name']]))
						{
							echo "matched with " . $row['book_name'];
							$buy_faculty = "Faculty_of_ME";
						
							$taken_table = mysql_query("SELECT * FROM sell" . $_SESSION['name']);
			
							$query = "INSERT INTO `buy" . $_SESSION['name'] . "`
							(buy_category, buy_book_name, buy_writer, buy_price, buy_from)
							VALUES ('Faculty_of_ME','".$row['book_name']."','".$row['writer_name']."', '".$row['price']."', '".$row['owner']."')";
							
							if (!mysql_query($query, $con))
							{
							  echo "Please try with another username";
							  //header('Location: http://localhost/Online_Library/Create_Account.php');
							  //exit(  );
							  die('Error: ' . mysql_error());				  
							}
							
							$taken_table = mysql_query("SELECT * FROM buy_transaction");
			
							$query2 = "INSERT INTO `buy_transaction`
							(book_name, writer_name, price, category, seller, buyer)
							VALUES ('".$row['book_name']."','".$row['writer_name']."','".$row['price']."','Faculty_of_ME','".$row['owner']."','".$_SESSION['name']."')";
							
							if (!mysql_query($query2, $con))
							{
							  echo "Please try with another username";
							  //header('Location: http://localhost/Online_Library/Create_Account.php');
							  //exit(  );
							  die('Error: ' . mysql_error());				  
							}
							
							$sql2="DELETE FROM Faculty_of_ME WHERE book_name='" . $row['book_name'] . "'" . "AND owner='" . $_SESSION['name'] . "'";

							if (!mysql_query($sql2,$con))
							{				
							  die('Sorry! We are unable to delete your book from faculty table.<br /> ' . mysql_error());
							}
							
							echo "<b>" . $row['book_name'] . "</b>, is bought successfully.";
							break;
						}
					}
				}
				mysql_close($con);*/
				//echo "post method is calling";
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
		if(!$row) echo "<p>There is no books in Faculty of EEE.</p>";
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
			  echo "<td>";
			  
			  echo "</td>";
			  echo "</tr>";
			  
			  echo "<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>";
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
		if(!$row) echo "<p>There is no books in Faculty of CE.</p>";
		else
		{
			
			?><p style="text-align:center; color:blue"><b>Faculty of Civil Engineering</b><hr /></p><?php
			
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
			  echo "<td>";
			  
			  if(isset($_SESSION['name'])){
			  ?>
			  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			  <input type="submit" name="<?php echo $row['book_name']; ?>" value="Buy"/>
			  </form>
			  <?php
			  }
			  echo "</td>";
			  echo "</tr>";
			  
			  echo "<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>";
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
		if(!$row) echo "<p>There is no books in Faculty of ME.</p>";
		else
		{
			
			?><p style="text-align:center; color:blue"><b>Faculty of Mechanical Engineering</b><hr /></p><?php
			
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
			  echo "<td>";
			  
			  if(isset($_SESSION['name'])){
			  ?>
			  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			  <input type="submit" name="<?php echo $row['book_name']; ?>" value="Buy"/>
			  </form>
			  <?php
			  }
			  echo "</td>";
			  echo "</tr>";
			  
			  echo "<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>";
			echo "</table>";
			?>
			</p></div><?php
			}while($row = mysql_fetch_array($result));
			
		}
		mysql_close($con);
	}
	?>
</body>
</html>