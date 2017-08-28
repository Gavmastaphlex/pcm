<?php
session_start();
  if ($_SESSION['pcmvisited'] != "yes") { 
  $_SESSION['pcmvisited'] = "yes";
  header("Location: welcome-to-pcm/"); 
  }
?>
<!DOCTYPE html>

<html>

	<head>
        <title>PCM</title>
		<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/nav.css" />
		<link rel="stylesheet" href="css/superslides.css">
		<meta name="description" content="" />
		<meta name="keywords" content="" >
        <meta charset="utf-8" />
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {
			$('.logo-slideshow').cycle({
				fx: 'fade',
				timeout: 2000
			});
		});
		</script>
	</head>
	
	<body>
		<div id="page-container">
          <div>
			<header> 
				<nav> 
				  <ul>
                    <a href="http://www.pcmoceania.com/index1.php" ><img src="images/nav-home-selected.png" class="nav-home"/></a>
                    <a href="http://www.pcmoceania.com/experience-pcm/" ><img src="images/nav-experience.png" class="nav-experience" onmouseover="this.src='images/nav-experience-over.png'" onmouseout="this.src='images/nav-experience.png'"/></a>
                    <a href="http://www.pcmoceania.com/teach-pcm/" ><img src="images/nav-teach.png" class="nav-teach" onmouseover="this.src='images/nav-teach-over.png'" onmouseout="this.src='images/nav-teach.png'"/></a>
                    <a href="http://www.pcmoceania.com/library/" ><img src="images/nav-resources.png" class="nav-library" onmouseover="this.src='images/nav-resources-over.png'" onmouseout="this.src='images/nav-resources.png'"/></a>
                    <a href="http://www.pcmoceania.com/store/products/book1/" ><img src="images/nav-shop.png" class="nav-shop" onmouseover="this.src='images/nav-shop-over.png'" onmouseout="this.src='images/nav-shop.png'"/></a>
                    <a href="http://www.pcmoceania.com/contact/" ><img src="images/nav-contact.png" class="nav-contact" onmouseover="this.src='images/nav-contact-over.png'" onmouseout="this.src='images/nav-contact.png'"/></a>
                    <img src="images/dot_orange.png" class="nav-dot-orange" id="dot-margin"/>
                    <img src="images/dot_brown.png" class="nav-dot-brown" id="dot-margin"/>
                    <img src="images/dot_purple.png" class="nav-dot-purple" id="dot-margin"/>
                    <img src="images/dot_red.png" class="nav-dot-red" id="dot-margin"/>
                    <img src="images/dot_yellow.png" class="nav-dot-yellow" id="dot-margin"/>
                    <img src="images/dot_blue.png" class="nav-dot-blue" id="dot-margin"/>
				  </ul>
				</nav>
			</header>
          </div>
          <div>
            <img src="images/homepage-image.jpg" id="homepage-image"/>
            <div class="box-left"></div>
            <div class="logo-slideshow">
              <img src="images/logo01.jpg" width="186" height="95" />
              <img src="images/logo02.jpg" width="186" height="95" />
              <img src="images/logo03.jpg" width="186" height="95" />
              <img src="images/logo04.jpg" width="186" height="95" />
              <img src="images/logo05.jpg" width="186" height="95" />
              <img src="images/logo06.jpg" width="186" height="95" />
            </div>
            <div class="centre-text"></div>
            <div class="box-right"></div>
            <div class="newuser-bar">
              <div class="newuser-text">
                <div style="float:right;">Would you like to take our short journey of introduction again?</div></div><a href="welcome-to-pcm/"><img src="images/link-arrow.jpg" id="newuser-arrow" onmouseover="this.src='images/link-arrow-over.jpg'" onmouseout="this.src='images/link-arrow.jpg'"/></a>
                </p>
              </div>
            </div>
            
          </div>
          
          <div id="preload">
            <img src="images/nav-experience-over.png" />
            <img src="images/nav-teach-over.png" />
            <img src="images/nav-resources-over.png" />
            <img src="images/nav-shop-selected.png" />
            <img src="images/nav-contact-over.png" />
            <img src="images/link-arrow-over.jpg" />
          </div>
          
	</body>

</html>