<?php
		$p=$_GET["p"];
		
		if(!strcmp($p, "name"))
		{
			$q=$_GET["q"];
			$con = mysql_connect('localhost', 'root', '');
			if (!$con)
			{
			  die('Could not connect: ' . mysql_error());
			}
			else ;//echo "connected";
			mysql_select_db('shopping', $con);
			
			$taken_table = mysql_query("SELECT * FROM user_Info");
			
			if($taken_table) ;//echo "client_information table selected";
			else echo "table can't selected";
			
			
			$x = 0;
				while($row = mysql_fetch_array($taken_table))
				{		
					//echo $row['User_Name'] . " and " . $q . " comparing" . $x; 
					if(!strcmp($row['name'], $q))
					{
						echo "Already exists";
						$x = 1;
						break;
					}
					//else echo "Not Matched" . $x;
					$x++;
				}
				if(!$x)
					echo "Not Matched";
		}
		else if(!strcmp($p, "email"))
		{
			$q=$_GET["q"];
			$dot = 0;
			$at = 0;
			$strlen = strlen( $q );
			for( $i = 0; $i <= $strlen; $i++ ) {
				$char = substr( $q, $i, 1 );
				//echo "comparing with " . $char;
				if($char == '.') $dot = 1;
				else if($char == '@') $at = 1;
				// $char contains the current character, so do your processing here
			}
			//echo $at . " " . $dot;
			if($at && $dot && $strlen>=10);
				//echo "ok";
			else echo "Incorrect Email";
		}
		else if(!strcmp($p, "password"))
		{
			//echo "check password";
			$p1=$_GET["p1"];
			$p2=$_GET["p2"];
			
			if(!strcmp($p1, $p2))
				echo "Password Matched";
			else echo "Not Matched";
		}
		else if(!strcmp($p, "mobile"))
		{
			$q=$_GET["q"];
			$strlen = strlen( $q );
			for( $i = 0; $i <= $strlen; $i++ ) {
				$char = substr( $q, $i, 1 );
				if($char>='0' && $char<='9');
				else 
				{
					echo "wrong input.";
					return;
				}
			}
		}
		else if(!strcmp($p, "sale_book_name"))
		{
			$q=$_GET["q"];
			$strlen = strlen( $q );
			for( $i = 0; $i <= $strlen; $i++ ) {
				$char = substr( $q, $i, 1 );
				if(!($char>='0' && $char<='9'));
				else 
				{
					if($char)
					echo "wrong input.";
					return;
				}
			}
		}
		else echo $p;
?>