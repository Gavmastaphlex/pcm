<?php
session_start();
if ($_COOKIE['welcomed'] != 'yes') { 
  setcookie("welcomed", "yes", time()+315350000);  
} 
else {
  $_SESSION['slide'] = "yes";
}
?>
<!DOCTYPE html>

<html>

	<head>
		
        <title>PCM</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" >
        <meta charset="utf-8" />
        
        <link href="css/style.css" type="text/css" rel="stylesheet"  />
        <link href="../css/nav.css" type="text/css" rel="stylesheet"  />
        <link href="css/jflow.style.css" type="text/css" rel="stylesheet"/>
        <link href="css/ubaplayer.style.css" type="text/css" rel="stylesheet" />
        <link href="css/flexslider.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/jquery.fancybox-buttons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
        
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
		    <script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-thumbs.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <!-- FLEXSLIDER -->
        <script type="text/javascript" charset="utf-8">
          $(window).load(function() {
           $('.flexslider').flexslider({ 
            animation: "slide",              //String: Select your animation type, "fade" or "slide"
            easing: "swing",              
            direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
            directionNav: true,    
            animationLoop: false,           
            smoothHeight: false,            
            slideshow: false,                //Boolean: Animate slider automatically
            slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
            animationSpeed: 400           //Integer: Set the speed of animations, in milliseconds
          });
        });
        </script>

        <script src="js/jquery.ubaplayer.js"></script>
        <script>
            $(function(){
                $("#ubaPlayer").ubaPlayer({
                codecs: [{name:"MP3", codec: 'audio/mpeg;'}]
                });
            });
        </script>
        <script type="text/javascript">
		  $(document).ready(function() {
		  $(".fancybox").fancybox({
			 fitToView: false 
		  });
		  });
		</script>
        <script type="text/javascript">
		$(document).ready(function() {
			$('.logo-slideshow').cycle({
				fx: 'fade',
				timeout: 2000
			});
		});
		</script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-34801004-17', 'pcmoceania.com');
      ga('send', 'pageview');

    </script>
			
	</head>
	
	<body>
		<div id="page-container">
        
      <div>
			 <header> 
				  <nav> 
				    <ul>
            <?php
              // show the navigation if the vistor has seen the slideshow before
              if ($_SESSION['slide'] == 'yes') { 
                $html = '<a href="../index1.php"><img src="../images/nav-home-selected.png" class="nav-home"/></a>'."\n";
                $html .= '<a href="/experience-pcm/" ><img src="../images/nav-experience.png" class="nav-experience" onmouseover="this.src=\'../images/nav-experience-over.png\'" onmouseout="this.src=\'../images/nav-experience.png\'"/></a>'."\n";
                $html .= '<a href="/teach-pcm/" ><img src="../images/nav-teach.png" class="nav-teach" onmouseover="this.src=\'../images/nav-teach-over.png\'" onmouseout="this.src=\'../images/nav-teach.png\'"/></a>'."\n";
                      
                $html .= '<a href="/library/" ><img src="../images/nav-resources.png" class="nav-library" onmouseover="this.src=\'../images/nav-resources-over.png\'" onmouseout="this.src=\'../images/nav-resources.png\'"/></a>'."\n";
                $html .= '<a href="/store/products/book1/" ><img src="../images/nav-shop.png" class="nav-shop" onmouseover="this.src=\'../images/nav-shop-over.png\'" onmouseout="this.src=\'../images/nav-shop.png\'"/></a>'."\n";
                $html .= '<a href="/contact/" ><img src="../images/nav-contact.png" class="nav-contact" onmouseover="this.src=\'../images/nav-contact-over.png\'" onmouseout="this.src=\'../images/nav-contact.png\'"/></a>'."\n";
                echo $html;
              }
            ?>
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
          
      <div id="characters-background"></div>
      <div id="loading"><img src="../images/ajax-loader.gif"></div>
        
      <!-- Flexslider -->
        <div class="flexslider">
          <ul class="slides">
            
             <?php
            // don't show the first slide if the visitor has been to the site before
              if (!isset($_SESSION['slide'])) { 
                $html = '<!-- slide1 -->'."\n";
                $html .= '<li>'."\n";
                $html .= '<img src="images/blank.png" id="homepage-image" alt="" />'."\n";
                $html .= '<img src="images/homeslide1b.jpg" style="margin-top: 28px;" id="home-slideover01" alt="" />'."\n";
                $html .= '<div class="newuser-text1" style="margin-top:80px;"><font>As this is your first time here, we invite you on a short journey of introduction</font></div>'."\n";
                $html .= '<div style="position: absolute; top: 536px; left:748px; font-size: 19px; font-family: Helvetica,\'dincregular\'; color: #BAB9AD; z-index:10001; background-color:#FFF; width:160px; text-align: right;"><font>ENTER</font></div>'."\n";
                $html .= '<img src="images/white-square.jpg" id="white-square"/>'."\n";
                $html .= '<div class="logo-slideshow">'."\n";
                $html .= '<img src="images/logo01.jpg" width="186" height="95" />'."\n";
                $html .= '<img src="images/logo02.jpg" width="186" height="95" />'."\n";
                $html .= '<img src="images/logo03.jpg" width="186" height="95" />'."\n";
                $html .= '<img src="images/logo04.jpg" width="186" height="95" />'."\n";
                $html .= '<img src="images/logo05.jpg" width="186" height="95" />'."\n";
                $html .= '<img src="images/logo06.jpg" width="186" height="95" />'."\n";
                $html .= '</div>'."\n";
                $html .= '<div class="slideContent">'."\n";
                $html .= '<div id="ubaPlayer"></div>'."\n";
                $html .= ' <p class="controls"></p>'."\n";
                $html .= '</div>'."\n";
                $html .= '</li>'."\n";
                echo $html;
            }
            ?>
            
            <!-- slide2 -->
            <li>
              <img src="images/blank.png" id="homepage-image" alt="" />
              <img src="images/home_slideover01.jpg" id="home-slideover02" alt="" />
              <div class="newuser-text2" style="display:none;">As this is your first time here, we invite you on a short journey of introduction</div>
              <div class="slideContent"> 
                <div id="ubaPlayer"></div>
                <p class="controls"></p>
              </div>
            </li>
            
            <!-- slide3 -->
            <li>
               
               <img src="images/taibi4.jpg" alt="" usemap="#taibi_map" />
              <map name="taibi_map" movieurl="videos/taibi">
                <area shape="rectangle" coords="0,10,310,300" alt="" class="fancybox video-button" href="#video-area2">
              </map> 
                <div id="video-area2">
                   <img src="images/screen680.png" id="taibi-screen"/>
                  <img src="images/screenbutton_long.png" id="taibi-bar"/>
                  <p id="taibi-video-title"> Dr Taibi Kahler </p>
                  <video width="620" height="240" controls id="video-player2">
                    Your browser does not support the video tag.
                 </video>

               </div>

               <script type="text/javascript"> 
   
                   var myvideo = document.getElementById("video-player2")

                  $(".video-button").on("click", function() {
                    
                    vid = $(this).parent().attr("movieurl")
                    var v = document.createElement("video")
                    if (v.canPlayType('video/mp4; codecs="avc1.42E01E, mp4a.40.2"')=="probably") {
                        vid = vid + ".mp4"
                      } else if (v.canPlayType('video/ogg; codecs="vp8, vorbis"')=="probably") {
                        vid = vid + ".webm"
                    } else {
                        vid = vid + ".ogg"
                    }
                    
                      // if we need to load a new video do so
                      if ($("#video-player2").attr("src") != vid) {
                          $("#video-player2").attr({
                              "src": vid,
                              "poster": "",
                              // load a fake attribute with the desired start time
                              "starttime": $(this).attr("time")})
                          $("#video-player2").on("canplay",function() {
                              // set the current time to the fake attribute
                              myvideo.currentTime=$(this).attr("starttime");
                              myvideo.play();
                              // remove the event to stop it triggering multiple times
                              $("#video-player2").off("canplay");
                          })
                      } else {
                          // if the video URL didn't change, just adjust the time
                          myvideo.currentTime=$(this).attr("time");
                      }
                  })
  
              </script>

                <div class="slideContent">
                <div id="ubaPlayer"></div>
                    <p class="controls"><a class="audioButton" href="audio/powerup.mp3"></br></a></p>
              </div>
          
        
            </li>

            <!-- slide4 -->
            <li>
              <img src="images/slide02.jpg" alt="" />
            </li>

            <!-- slide5 -->
            <li>
              <img src="images/slide03.jpg" alt="" />
            </li>

            <!-- slide6 -->
            <li>
             <img src="images/slide-outro.jpg" alt="" />
             <div id="video-area">
                   <video width="762" height="517" controls id="video-player">
                      <source src="videos/inputs-outputs.mp4" type="video/mp4">
                      <source src="videos/inputs-outputs.ogg" type="video/ogg">
                      <source src="videos/inputs-outputs.webm" type="video/webm">
                      Your browser does not support the video tag.
                   </video>
                <!--<img src="images/videobknd.png" alt="" id="animation-bg"/> --> 
                </div>
                <img src="images/animation-line.jpg" class="animation-line"/>
                <div class="slideContent">
                    <div id="ubaPlayer"></div>
                    <p class="controls"><a class="audioButton" href="audio/powerup.mp3"></a></p>
                </div>
            </li>
             
          </ul>

        </div>
        <?php
              // show the navigation if the vistor has seen the slideshow before
              if ($_SESSION['slide'] == 'yes') { 
                $html = '<a href="../index1.php"><div id="end_link"></div></a>'."\n";
              }
              else {
                $_SESSION['slide'] = 'yes';
                $html = '<a href="../experience-pcm"><div id="end_link"></div></a>'."\n";
              }
              echo $html;
            ?>
       </div>
    
        <div id="preload">
            <img src="../images/nav-home-over.png" />
            <img src="../images/nav-experience-over.png" />
            <img src="../images/nav-teach-over.png" />
            <img src="../images/nav-resources-over.png" />
            <img src="../images/nav-shop-over.png" />
            <img src="../images/nav-contact-over.png" />
            <img src="../images/link-arrow-left-over.jpg" />
            <img src="../images/images/link-arrow-over.jpg" />
        </div>



	</body>

</html>