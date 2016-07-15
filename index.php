<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<title>Template</title>
<link href="library_style.css" rel="stylesheet" type="text/css" />

<link href="s3slider.css" rel="stylesheet" type="text/css" />
<!-- JavaScripts-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 2600
        });
    });
</script>

</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_menu" style="background: #007ACC; ">
                
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="Shoping.php">Shopping</a></li>
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
            
            <!--<h4>Categories</h4>
            <ul class="templatemo_list">
                <li><a href="" target="_parent">Computer Engineering</a></li>
                <li><a href="" target="_parent">Electrical Engineering</a></li>
                <li><a href="" target="_parent">Electronic Engineering</a></li>
                <li><a href="" target="_parent">Mechanical Engineering</a></li>
                <li><a href="" target="_parent">Civil Engineering</a></li>
                <li><a href="" target="_parent">Industrial Engineering</a></li>
                <li><a href="" target="_parent">Textile Engineering</a></li>
                <li><a href="" target="_parent">Urban & Regional Planning</a></li>
                <li><a href="" target="_parent">Science</a></li>
            </ul> -->
            
            <div class="cleaner_h40"></div>
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="images/slider/robi4.jpg" alt="1" /></a>
                        <span class="top"><strong>Product selling</strong><br />You can sell your product here.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="images/slider/robi3.jpg" alt="2" /></a>
                        <span class="bottom"><strong>Product buy</strong><br />Also you can buy product from here.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="images/slider/3.jpg" alt="3" />
                        <span class="left"><strong>Fantacy</strong><br />You can get all service without your movement</span>
                    </li>
                    <li class="sliderImage">
                        <img src="images/slider/4.jpg" alt="4" />
                        <span class="right"><strong>Feed Back</strong><br />You can advise, also can say something like that.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
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