<?php
session_start();
include 'classes/modelClass.php';
$model = new Model;

if ($_COOKIE['pcmvisited'] != "yes") { 
  setcookie("pcmvisited", "yes", time()+315360000);   
  header("Location: welcome-to-pcm/"); 
}
$events = $model->getEvents();
$html = $model->sortResults($events); 

?>
<!DOCTYPE html>

<html>

	<head>
        <title>PCM</title>
		<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/nav.css" />
		<link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="welcome-to-pcm/css/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="welcome-to-pcm/css/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="welcome-to-pcm/css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />

		<meta name="description" content="" />
		<meta name="keywords" content="" >
        <meta charset="utf-8" />
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script type="text/javascript" src="welcome-to-pcm/js/jquery.fancybox.pack.js"></script>
        <script type="text/javascript">      
      		$(document).ready(function() {
      			$('.logo-slideshow').cycle({
      				fx: 'fade',
      				timeout: 2000
      			});
      		});
		    </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $(".fancybox").fancybox({
             fitToView: false
            });

            $('#video-area-home').click(function() {
              $.fancybox.close();
            });

            $('#video-player2').click(function(event){
              event.stopPropagation();
            });
      
          });
        </script>
         <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-34801004-17']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>

	</head>
	
	<body>
      <div id="warning">
     <!--[if lt IE 9]>
          <div class="noscript" width="960" style="margin: 0 auto;">
            <a href="http://windows.microsoft.com/en-nz/internet-explorer/download-ie"><img src="images/Homepage-Browser-Message.png" alt="You may experience some difficulty if you are using Internet Explorer 8 or older.  Please upgrade your browser" /></a>
          </div>
        <![endif]-->
        
        <noscript>
          <img src="images/Homepage-Javascript-Message.png" alt="The PCM website functions best with Javascript enabled" />
        </noscript>
      </div>
		<div id="page-container">
       
        
			<div>
      <header> 
       
				<nav> 
				  <ul>
                    <a href="index1.php" ><img src="images/nav-home-selected.png" class="nav-home"/></a>
                    <a href="/experience-pcm/" ><img src="images/nav-experience.png" class="nav-experience" onmouseover="this.src='images/nav-experience-over.png'" onmouseout="this.src='images/nav-experience.png'"/></a>
                    <a href="/teach-pcm/" ><img src="images/nav-teach.png" class="nav-teach" onmouseover="this.src='images/nav-teach-over.png'" onmouseout="this.src='images/nav-teach.png'"/></a>
                    <a href="/library/" ><img src="images/nav-resources.png" class="nav-library" onmouseover="this.src='images/nav-resources-over.png'" onmouseout="this.src='images/nav-resources.png'"/></a>
                    <a href="/shop/" ><img src="images/nav-shop.png" class="nav-shop" onmouseover="this.src='images/nav-shop-over.png'" onmouseout="this.src='images/nav-shop.png'"/></a>
                    <a href="/contact/" ><img src="images/nav-contact.png" class="nav-contact" onmouseover="this.src='images/nav-contact-over.png'" onmouseout="this.src='images/nav-contact.png'"/></a>
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
            <div class="box-left"><img src="images/new-resources.jpg" usemap="#resources_map" />
                <map name="resources_map" movieurl="experience-pcm/videos/pcm_model_taibi_kahler_phd-cr">
                    <area shape="rectangle" coords="37,102,100,122" alt="" class="fancybox video-button" target="_blank" href="#video-area-home">
                  </map>
                <div id="video-area-home">
                       <img src="welcome-to-pcm/images/screen680.png" id="taibi-screen"/>
                      <img src="welcome-to-pcm/images/screenbutton_long.png" id="taibi-bar"/>
                      <p id="taibi-video-title"> Dr Taibi Kahler </p>
                      <video width="622" height="378" id="video-player2" controls>
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





            </div>
            <div class="logo-slideshow">
              <img src="images/logo01.jpg" width="186" height="95" />
              <img src="images/logo02.jpg" width="186" height="95" />
              <img src="images/logo03.jpg" width="186" height="95" />
              <img src="images/logo04.jpg" width="186" height="95" />
              <img src="images/logo05.jpg" width="186" height="95" />
              <img src="images/logo06.jpg" width="186" height="95" />
            </div>
            <div class="centre-text"></div>
            
            <div class="box-right-background"></div>
            
            <div class="box-right">
              <?php
                echo $html;
              ?>
            </div>
            

            <div class="newuser-bar">
              <div class="newuser-text">
                <div style="float:right;">Would you like to take our short journey of introduction again?</div></div><a href="welcome-to-pcm/"><img src="images/link-arrow.jpg" id="newuser-arrow" onmouseover="this.src='images/link-arrow-over.jpg'" onmouseout="this.src='images/link-arrow.jpg'"/></a>
                </p>
              </div>
            </div>
          
          <?php
            if (isset($_SESSION['adminID'])) {
              echo '<div id="admin_links">'."\n";
              if ($_SESSION['tester'] == '0') {
                echo '<a href="admin.php" id="admin_login">add/delete events</a><br />'."\n";
              }
              echo '<a href="logout.php" id="admin_logout">logout</a>'."\n";
              echo '</div>'."\n";
            }
          ?>  
          
          </div>
          
          <div id="preload">
            <img src="images/nav-experience-over.png" />
            <img src="images/nav-experience-selected.png" />
            <img src="images/nav-teach-over.png" />
            <img src="images/nav-teach-selected.png" />
            <img src="images/nav-resources-over.png" />
            <img src="images/nav-resources-selected.png" />
            <img src="images/nav-shop-selected.png" />
            <img src="images/nav-shop-over.png" />
            <img src="images/nav-contact-selected.png" />
            <img src="images/nav-contact-over.png" />
            <img src="images/link-arrow-over.jpg" />
            <img src="/welcome-to-pcm/images/ajax-loader.gif" />
            
            
            
            <img src="images/nav-shop.png" />
          </div>
          
	</body>

</html>