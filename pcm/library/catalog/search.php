<!DOCTYPE html>

<html>

  <head>

        <title>Library Catalog</title>

    <link rel="stylesheet" href="css/search.css" />
    <link rel="stylesheet" href="../../css/nav.css">

    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    

    <meta name="description" content="" />

    <meta name="keywords" content="" >

     <meta charset="utf-8" />

    
    <script type="text/javascript" src="../../js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery.innerfade.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    
    <script type="text/javascript" src="../../welcome-to-pcm/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="../../welcome-to-pcm/js/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="../../welcome-to-pcm/js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="../../welcome-to-pcm/js/jquery.fancybox-thumbs.js"></script>


   <script type="text/javascript">

   $(document).ready(function(){

      $('#fade').innerfade({
          speed: 'slow',
          timeout: 4000,
          type: 'sequence',
          containerheight: 'auto'
      });

    });

   </script>

 <script type="text/javascript">

   $(document).ready(function() {

      $('.fancybox').fancybox({
          padding : 0,
          openEffect  : 'elastic',

          'afterClose' : function () {

            $("#video-player2").removeAttr("src").removeAttr("starttime");

          }
      });

      $('#video-area2').click(function() {
        $.fancybox.close();
      });

      $('#video-player2').click(function(event){
        event.stopPropagation();
      });


      $(".youtube-link").click(function() {
      $.fancybox({

      padding   : 0,
      autoScale   : false,
      transitionIn  : 'none',
      transitionOut : 'none',
      title     : this.title,
      width     : 1020,
      height    : 495,
      href      : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
      type      : 'swf',
      
      swf     : {
           wmode    : 'transparent',
        allowfullscreen : 'true',
        autoplay: 'true'
      }, 
      tpl : {
          
          closeBtn : '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;" style="top: 0px; left: 979px;"></a>'
        
        }


    });

  return false;
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


    



    <div id="page-container">


    <div>

      <header> 
              <nav> 
                <ul>
                    <a href="../../index1.php" ><img src="../../../images/nav-home.png" class="nav-home" onmouseover="this.src='../../../images/nav-home-over.png'" onmouseout="this.src='../../../images/nav-home.png'"/></a>
                    <a href="../../experience-pcm/" ><img src="../../../images/nav-experience.png" class="nav-experience" onmouseover="this.src='../../../images/nav-experience-over.png'" onmouseout="this.src='../../../images/nav-experience.png'"/></a>
                    <a href="../../teach-pcm/" ><img src="../../../images/nav-teach.png" class="nav-teach" onmouseover="this.src='../../../images/nav-teach-over.png'" onmouseout="this.src='../../../images/nav-teach.png'"/></a>
                    <a href="../../library/" ><img src="../../../images/nav-resources-selected.png" class="nav-library"/></a>
                    <a href="../../shop/" ><img src="../../../images/nav-shop.png" class="nav-shop" onmouseover="this.src='../../../images/nav-shop-over.png'" onmouseout="this.src='../../../images/nav-shop.png'"/></a>
                    <a href="../../contact/" ><img src="../../../images/nav-contact.png" class="nav-contact" onmouseover="this.src='../../../images/nav-contact-over.png'" onmouseout="this.src='../../../images/nav-contact.png'"/></a>
                    <img src="../../../images/dot_orange.png" class="nav-dot-orange" id="dot-margin"/>
                    <img src="../../../images/dot_brown.png" class="nav-dot-brown" id="dot-margin"/>
                    <img src="../../../images/dot_purple.png" class="nav-dot-purple" id="dot-margin"/>
                    <img src="../../../images/dot_red.png" class="nav-dot-red" id="dot-margin"/>
                    <img src="../../../images/dot_yellow.png" class="nav-dot-yellow" id="dot-margin"/>
                    <img src="../../../images/dot_blue.png" class="nav-dot-blue" id="dot-margin"/>
                </ul>
              </nav>
            </header>

          </div>

          <div class="content">

          <img src="images/library-catalog-background.png" alt=""/>
          <img src="images/line-divider.png" alt="" id="tv-line-left"/>
          <img src="images/line-divider.png" alt="" id="tv-line-middle"/>
          <img src="images/line-divider.png" alt="" id="tv-line-right"/>

          <a href="index.php" id="back-to-catalogue-link">Back to catalogue page</a>

          <div id="catalog">
          
            <div id="first-column" class="column">
              <ul>
              <?php
              include 'php/catalog.php';
              $catalog = new Catalog;
              $firstColumns = $catalog -> getFirstColumnInfo();
              foreach($firstColumns as $firstColumn) {

                  echo '<li class="first-column-item non-selected-1" id="'.$firstColumn['firstColumnCodeID'].'"><img src="images/folder-icon.png" class="folder-icon"/>'.$firstColumn['firstColumnCategory'].'</li>'."\n";

                } 
              ?>
               </ul>
            </div>


            <div id="second-column" class="column"> 
              <?php
              foreach($firstColumns as $firstColumn) {

                  echo '<div class="second-column-menu" id="'.$firstColumn['firstColumnCodeID'].'-menu">'."\n";
                
                 
                    echo '<ul>'."\n";
                $secondColumns = $catalog -> getSecondColumnInfoFromFirstColumnID($firstColumn['firstColumnCodeID']);
                foreach($secondColumns as $secondColumn) {
                  
                  if($secondColumn['secondColumnActive'] == false) {
                    echo '<li class="second-column-item-inactive"><img src="images/folder-icon.png" class="folder-icon"/>'.$secondColumn['secondColumnCategory'].'</li>'."\n";
                  } else {

                      echo '<li class="second-column-item non-selected-2" id="'.$secondColumn['secondColumnCodeID'].'"><img src="images/folder-icon.png" class="folder-icon"/>'.$secondColumn['secondColumnCategory'].'</li>'."\n";
                  
                  }                

                } 
                    echo '</ul>'."\n";
                 echo '</div>'."\n";
                }               
              ?>
            </div>

            <div id="third-column" class="column">              
              <?php


                        if($_POST['searchOption'] == 'Title') {
                          $documentResults = $catalog -> getDocumentsByTitle($_POST['search']);
                        }
                        

                        if($_POST['searchOption'] == 'Author') {
                          $documentResults = $catalog -> getDocumentsByAuthor($_POST['search']);
                        }

                        
                        if($_POST['searchOption'] == 'Content') {
                          $documentResults = $catalog -> getDocumentsByContent($_POST['search']);
                        }



                    echo '<div class="third-column-menu">'."\n";
                   
                      echo '<ul>'."\n";

                      if($documentResults) {

                          foreach($documentResults as $documentResult) {

                            $firstCategory = $catalog -> getFirstColumnIDFromSecondColumnID($documentResult['parentCategoryID']);

                            echo '<div class="item-container">'."\n";
                            echo '<div class="icon-container"><img src="images/document-types/small-'.$documentResult['documentType'].'.png" class="'.$documentResult['documentType'].'-column-icon media-icon" /></div>'."\n";
                            echo '<div class="text-container"><li class="third-column-item non-selected-3 first_'.$firstCategory['parentCategoryID'].' second_'.$documentResult['parentCategoryID'].'" id="'.$documentResult['documentIdName'].'">'.$documentResult['documentTitle'].'</li></div>'."\n";
                            echo '</div>'."\n";
                          } 

                        } else {
                          echo '<li class="search-colum3-text" id="noResults">No documents found</li>';
                        }              
              
                    echo '</ul>'."\n";
                 echo '</div>'."\n";
                               
              ?>
            </div>


            <div id="fourth-column" class="column">    
            <?php
                    if($documentResults) {
                    foreach($documentResults as $documentResult) {

                       echo '<div class="column-4-item file-summary" id="'.$documentResult['documentIdName'].'-summary" >'."\n";

                       if($documentResult['documentType'] == 'written') {
                        echo '<a href="'.$documentResult['documentPath'].'" target="_blank" class="document-type big-'.$documentResult['documentType'].'" onclick="window.open(\''.$documentResult['documentPath'].'\', \'previewWindow\', \'width=630,height=630,status=yes,resizable=no,scrollbars=yes\'); return false"></a>'."\n";
                      } else if(strpos($documentResult['documentPath'], 'http') === 0) {

                      echo '<a class="fancybox youtube-link document-type big-'.$documentResult['documentType'].'" href="'.$documentResult['documentPath'].'"></a>'."\n";
                      } else if($documentResult['documentType'] == 'video'){
                        echo '<div movieurl="videos/'.$documentResult['documentPath'].'">'."\n";
                        echo '<a class="fancybox video-button document-type big-'.$documentResult['documentType'].'" href="#video-area2""></a>'."\n";
                        echo '</div>'."\n";
                        
                      } else {
                        echo '<a href="'.$documentResult['documentPath'].'" target="_blank" class="document-type big-'.$documentResult['documentType'].'" onclick="window.open(\''.$documentResult['documentPath'].'\', \'previewWindow\', \'width=630,height=630,status=yes,resizable=no,scrollbars=yes\');"></a>'."\n";
                      }


                       echo '<img src="images/search-toolbar/underline.png" id="underline-image">'."\n";

                       echo '<div class="document-content-container">'."\n";

                             echo '<div class="document-title-main-container">'."\n";

                               echo '<div class="document-title-heading-container float-class">'."\n";
                                  echo '<p>Title</p>'."\n";
                               echo '</div>'."\n";

                               echo '<div class="document-title-content-container float-class">'."\n";
                                  echo '<p id="document-title-result">'.htmlentities(stripslashes($documentResult['documentTitle']),ENT_QUOTES).'</p>'."\n";
                               echo '</div>'."\n";

                               echo '<div class="clearDiv"></div>'."\n";

                             echo '</div>'."\n";

                             $authorNames = $catalog -> getAuthorNamesByID($documentResult['documentID']);

                             /*echo '<pre>'."\n";
                             print_r($authorNames);
                             echo '</pre>'."\n";*/

                             if (is_array($authorNames)) {
                             
                              foreach($authorNames as $authorName) {

                                  if (is_array($authorName)) {

                                     echo '<div class="document-author-main-container">'."\n";

                                       echo '<div class="document-author-heading-container float-class">'."\n";
                                          echo '<p>Author</p>'."\n";
                                       echo '</div>'."\n";

                                       echo '<div class="document-author-content-container float-class">'."\n";
                                          echo '<p id="document-author-result">'.htmlentities(stripslashes($authorName['authorName']),ENT_QUOTES).'</p>'."\n";
                                       echo '</div>'."\n";

                                       echo '<div class="clearDiv"></div>'."\n";

                                     echo '</div>'."\n";

                                  }

                               }

                             }
                             echo '<div class="document-description-main-container">'."\n";

                               echo '<div class="document-description-heading-container float-class">'."\n";
                                  echo '<p>Description</p>'."\n";
                               echo '</div>'."\n";

                               echo '<div class="document-description-content-container float-class">'."\n";
                                  echo '<p id="document-description-result">'.htmlentities(stripslashes($documentResult['documentDescription']),ENT_QUOTES).'</p>'."\n";
                               echo '</div>'."\n";

                               echo '<div class="clearDiv"></div>'."\n";

                             echo '</div>'."\n";

                        echo '</div>'."\n";
                       
                        echo '</div>'."\n";

                        /*
                        echo '<div id="video-area-catalog">'."\n";
                        echo '<img src="images/screen680.png" id="taibi-screen"/>'."\n";
                        echo '<img src="images/screenbutton_long.png" id="taibi-bar"/>'."\n";
                        echo '<p id="taibi-video-title"> Dr Taibi Kahler </p>'."\n";
                        echo ' <video width="620" height="240" class="video-player2" controls>'."\n";
                        echo ' Your browser does not support the video tag.'."\n";
                        echo '</video>'."\n";
                        echo '</div> '."\n";
                        */


                      } 

                    }
              ?>

              </div>


              <div id="video-area2">
                       <img src="images/screen680.png" id="taibi-screen"/>
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
                        
            <!--/////////Fourth Column content ends here//////////-->

            <!--/////////Breadcrumb area begins here//////////-->
            
            <div id="breadcrumb">
            
              <div id="breadcrumb-area-1" class="breadcrumb-section" >
                <?php
                $firstColumns = $catalog -> getFirstColumnInfo();
                foreach($firstColumns as $firstColumn) {
                   echo '<div id="'.$firstColumn['firstColumnCodeID'].'-breadcrumbOne" class="breadcrumbOne"><img src="images/folder-icon.png" class="breadcrumb-folder-icon"/><p>'.$firstColumn['firstColumnCategory'].'</p></div>'."\n";
                  } 
                ?>
              </div>
              
              <div id="breadcrumb-area-2" class="breadcrumb-section" >
                <?php
                $secondColumns = $catalog -> getsecondColumnInfo();
                foreach($secondColumns as $secondColumn) {
                   echo '<div id="'.$secondColumn['secondColumnCodeID'].'-breadcrumbTwo" class="breadcrumbTwo"><img src="images/breadcrumb-arrow.png" class="breadcrumb-arrow"/><img src="images/folder-icon.png" class="breadcrumb-folder-icon"/><p>'.$secondColumn['secondColumnCategory'].'</p></div>'."\n";
                  } 
                ?>
              </div>
              
              <div id="breadcrumb-area-3" class="breadcrumb-section" >
                <?php
                $documents = $catalog -> getAllDocuments();
                foreach($documents as $document) {
                   echo '<div id="'.$document['documentIdName'].'-breadcrumbThree" class="breadcrumbThree"><img src="images/breadcrumb-arrow.png" class="breadcrumb-arrow"/><img src="images/document-types/small-'.$document['documentType'].'.png" class="book-symbol-breadcrumb" /><p>'.$document['documentTitle'].'</p></div>'."\n";
                  } 
                ?>
              </div>
              
            </div>
          
            <!--Breadcrumb area ends here-->
            <div id="fade">
              <img src="images/pcm-logos/Pcm_Blue_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Brown_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Orange_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Purple_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Red_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Yellow_Catalogue.png" alt="Blue PCM Logo" />
            </div>
            

        </div> 

      </div> 

        <a href="http://www.pcmoceania.com/library/"><img src="images/submit-document-form/close-button.png" id="catalogue-close-button" /></a>




          <div id="preload">

            <img src="images/document-types/big-audio.png"  />
            <img src="images/document-types/big-audio-hover.png"  />
            <img src="images/document-types/big-video.png"  />
            <img src="images/document-types/big-video-hover.png"  />
            <img src="images/document-types/big-written.png"  />
            <img src="images/document-types/big-written-hover.png"  />
            <img src="images/document-types/small-audio.png"  />
            <img src="images/document-types/small-video.png"  />
            <img src="images/document-types/small-written.png"  />

          </div>
 
  </body>



</html>