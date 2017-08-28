<!DOCTYPE html>

<html>

	<head>

        <title>Library Catalog</title>

    
		<link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/formStyles.css" />

    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="css/IEFormStyles.css" />
    <![endif]-->


    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    

		<meta name="description" content="" />

		<meta name="keywords" content="" >

     <meta charset="utf-8" />

    
    <script type="text/javascript" src="../../js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <script type="text/javascript" src="js/jquery.innerfade.js"></script>
    <script type="text/javascript" src="js/catalog.js"></script>
    
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox-thumbs.js"></script>

    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


   <script type="text/javascript">

   $(document).ready(function(){

      $('#fade').innerfade({
          speed: 'slow',
          timeout: 4000,
          type: 'sequence',
          containerheight: 'auto'
      });

      $('#form-fade').innerfade({
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

    <?php

    include 'php/catalog.php';
              $catalog = new Catalog;

              /*


              echo '<pre>'."\n";
              print_r($_POST);
              echo '</pre>'."\n";

              */
              

    //echo $_POST['datePublished']; 2013-06-05

              
    if($_POST['documentSubmit']) {

      $newUserID = $catalog -> addNewUser();

      if($newUserID['newUserID']) {


                  if($_POST['testimonials-subcategory']) {
                      $subcategory = $_POST['testimonials-subcategory'];
                  }

                  if($_POST['what-is-pcm-subcategory']) {
                      $subcategory = $_POST['what-is-pcm-subcategory'];
                  }

                  if($_POST['pcm-in-action-subcategory']) {
                      $subcategory = $_POST['pcm-in-action-subcategory'];
                  }

                  if($_POST['where-is-pcm-used-subcategory']) {
                      $subcategory = $_POST['where-is-pcm-used-subcategory'];
                  }

                  if($_POST['other-subcategory']) {
                      $subcategory = $_POST['other-subcategory'];
                  }
                  
                  $documentUploadPath = $catalog -> uploadAndResizeImage($_POST['documentFormat']);

                  $logoUploadPath = $catalog -> uploadAndResizeImage('Logo');

                  $subcategoryItemNum = $catalog -> countSubcategoryItems($subcategory);

                  $newSubcategoryItemNum = $subcategoryItemNum['count(documentID)'] + 1;

                  $documentIDName = $_POST['libraryCategory'] . '-' . $subcategory . '-button-' . $newSubcategoryItemNum;

                  $newDocumentID = $catalog -> insertNewDocument($newUserID['newUserID'], $subcategory, $documentUploadPath, $logoUploadPath, $documentIDName);

                  $testID = $newDocumentID['newDocumentID'];

                  while($logoID['logoID'] == 0) { 

                    $testID = $testID - 1;

                    $logoID = $catalog -> checkLastPCMLogoID($testID);

                  }

                  if($logoID['logoID'] == 6) {
                    $newLogoId = 1;
                  } else {
                    $newLogoId = $logoID['logoID'] + 1;
                  }

                  $logoAdded = $catalog -> updatePCMLogoValue($newLogoId, $newDocumentID['newDocumentID']);
                  
        
            if($newDocumentID['newDocumentID'] && $logoAdded == true) {

                  $authors = array(stripslashes($_POST['authorsNameOne']));

                  if($_POST['authorsNameTwo']) {
                      array_push($authors, stripslashes($_POST['authorsNameTwo']));
                  }

                  if($_POST['authorsNameThree']) {
                      array_push($authors, stripslashes($_POST['authorsNameThree']));
                  }

                  if($_POST['authorsNameFour']) {
                      array_push($authors, stripslashes($_POST['authorsNameFour']));
                  }

                  if($_POST['authorsNameFive']) {
                      array_push($authors, stripslashes($_POST['authorsNameFive']));
                  }

                  if($_POST['authorsNameSix']) {
                      array_push($authors, stripslashes($_POST['authorsNameSix']));
                  }

                  foreach($authors as $author) {
                      $authorID = $catalog -> checkIfAuthorExists($author);
                      if($authorID) {
                        $authorSuccess = $catalog -> linkAuthorToDocument($newDocumentID['newDocumentID'], $authorID['authorID']);

                        if(!$authorSuccess) {
                          $error['existingAuthor'] = true;
                        }

                      } else {
                        $newAuthorID = $catalog -> insertNewAuthor($author);

                        $newAuthorSuccess = $catalog -> linkAuthorToDocument($newDocumentID['newDocumentID'], $newAuthorID['newAuthorID']);

                        if(!$newAuthorSuccess) {
                          $error['newAuthor'] = true;
                        }
                        
                      }

                  }

                  if($error) {

                    if($error['existingAuthor'] == true) {
                          echo 'There was a problem linking an existing author'."\n";
                      }

                      if($error['newAuthor'] == true) {
                          echo 'There was a problem linking a new author'."\n";
                      }
                      
                        
                  } else {

                    echo '<img src="images/submissionpopup.png" id="submission-popup"/>'."\n";
                    echo '<img src="images/submit-document-form/close-button.png" id="submissionpopup-close-button" />'."\n";

                      // EDIT THE 2 LINES BELOW AS REQUIRED

                      //$email_to = 'gavin.mcgruddy@gmail.com';

                      $email_to = 'andrea@kahlercom.co.nz' . ', ';
                      $email_to .= 'robyn@kahlercom.co.nz';
                      $email_subject = "New Document Upload from the PCM Website";
                      $email_from = 'ben@luvly.co.nz';
                       
                      $users_name = $_POST['firstName'] . ' ' . $_POST['lastName']; // required
                      $users_email = $_POST['email']; // required
                      $users_phone = $_POST['phone']; // required

                      $company_name = $_POST['companyName']; // required
                      $company_website = $_POST['companyWebsite']; // required
                      $company_email = $_POST['companyEmail']; // required

                      $document_title = $_POST['documentTitle']; // required
                      $document_subtitle = $_POST['documentSubtitle']; // required

                      $author_number = $_POST['authorNumber']; // required
                      $author_name_one = $_POST['authorsNameOne']; // required
                      $author_name_two = $_POST['authorsNameTwo']; // required
                      $author_name_three = $_POST['authorsNameThree']; // required
                      $author_name_four = $_POST['authorsNameFour']; // required
                      $author_name_five = $_POST['authorsNameFive']; // required
                      $author_name_six = $_POST['authorsNameSix']; // required

                      $is_author = $_POST['isAuthor']; // required
                      $has_permission = $_POST['hasPermission']; // required

                      $author_credentials = $_POST['authorCredentials']; // required

                      $raw_library_category = $_POST['libraryCategory']; // required

                        if($_POST['testimonials-subcategory']) {
                        $raw_sub_category = $_POST['testimonials-subcategory'];
                          }

                        if($_POST['what-is-pcm-subcategory']) {
                            $raw_sub_category = $_POST['what-is-pcm-subcategory'];
                        }

                        if($_POST['pcm-in-action-subcategory']) {
                            $raw_sub_category = $_POST['pcm-in-action-subcategory'];
                        }

                        if($_POST['where-is-pcm-used-subcategory']) {
                            $raw_sub_category = $_POST['where-is-pcm-used-subcategory'];
                        }

                        if($_POST['other-subcategory']) {
                            $raw_sub_category = $_POST['other-subcategory'];
                        }


                        if($raw_library_category != 'other') {
                            $document_categories = $catalog -> getCategoryNames($raw_sub_category);

                            foreach ($document_categories as $document_category) {
                              if(is_array($document_category)) {
                                $library_category = $document_category['firstColumnCategory'];
                                $sub_category = $document_category['secondColumnCategory'];
                              }
                              
                            }

                        } else {

                            $library_category = 'Other';
                            $sub_category = $_POST['other-subcategory'];

                        }

                      $document_excerpt = $_POST['documentExcerpt']; // required
                      $document_format = $_POST['documentFormat']; // required
                      $document_keywords = $_POST['documentKeywords']; // required

                      $document_path = $catalog -> getDocumentPath($newDocumentID['newDocumentID']);

                      $document_link = 'http://www.pcmoceania.com/library/catalog/'.$document_path['documentPath']; // required

                      $logo_path = $catalog -> getLogoPath($newDocumentID['newDocumentID']);

                      $logo_link = 'http://www.pcmoceania.com/library/catalog/'.$logo_path['logoPath']; // required

                      function clean_string($string) {
                        $bad = array("content-type","bcc:","to:","cc:","href");
                        return str_replace($bad,"",$string);
                      }

                        $email_message = "Hi Andrea and Robyn,"."\n";
                        $email_message .= " "."\n";
                        $email_message .= "If you would like to add the document attached to the PCM library"."\n";
                        $email_message .= "please check all details are correct and simply send a reply to this email."."\n";
                        $email_message .= "Thanks,"."\n";
                        $email_message .= " "."\n";
                        $email_message .= "Ben Jamison"."\n";
                        $email_message .= " "."\n";
                        $email_message .= " "."\n";
                        $email_message .= "USER DETAILS"."\n";
                        $email_message .= " "."\n";
                        $email_message .= "Users Name: ".clean_string($users_name)."\n";
                        $email_message .= "Users Email: ".clean_string($users_email)."\n";

                        if($_POST['phone']) {
                          $email_message .= "Users Phone: ".clean_string($users_phone)."\n";
                        }

                        if($_POST['companyName']) {
                          $email_message .= "Company Name: ".clean_string($company_name)."\n";
                        }

                        if($_POST['companyWebsite']) {
                          $email_message .= "Company Website: ".clean_string($company_website)."\n";
                        }

                        if($_POST['companyEmail']) {
                          $email_message .= "Company Email: ".clean_string($company_email)."\n";
                        }

                        $email_message .= " "."\n";

                        $email_message .= "Here is the link to view or download the company logo: "."\n";
                        $email_message .= $logo_link . "\n";

                        $email_message .= " "."\n";
                        $email_message .= "DOCUMENT DETAILS"."\n";
                        $email_message .= " "."\n";
                        $email_message .= "Document Title: ".clean_string($document_title)."\n";

                        if($_POST['documentSubtitle']) {
                          $email_message .= "Document Subtitle: ".clean_string($document_subtitle)."\n";
                        }

                        if($_POST['authorsNameOne']) {
                            $email_message .= "Author #1: ".clean_string($author_name_one)."\n";
                        }

                        if($_POST['authorsNameTwo']) {
                            $email_message .= "Author #2: ".clean_string($author_name_two)."\n";
                        }

                        if($_POST['authorsNameThree']) {
                            $email_message .= "Author #3: ".clean_string($author_name_three)."\n";
                        }

                        if($_POST['authorsNameFour']) {
                            $email_message .= "Author #4: ".clean_string($author_name_four)."\n";
                        }

                        if($_POST['authorsNameFive']) {
                            $email_message .= "Author #5: ".clean_string($author_name_five)."\n";
                        }

                        if($_POST['authorsNameSix']) {
                            $email_message .= "Author #6: ".clean_string($author_name_six)."\n";
                        }

                        $email_message .= "Is the user the author: ".clean_string($is_author)."\n";
                        $email_message .= "Does the user have permission to upload the document: ".clean_string($has_permission)."\n";

                        if($_POST['authorCredentials']) {
                            $email_message .= "Author Credentials: ".clean_string($author_credentials)."\n";
                        }

                        $email_message .= "Library Category: ".clean_string($library_category)."\n";
                        $email_message .= "Sub category: ".clean_string($sub_category)."\n";
                        $email_message .= "Document excerpt: ".clean_string($document_excerpt)."\n";
                        $email_message .= "Document format: ".clean_string($document_format)."\n";
                        $email_message .= "Document keywords: ".clean_string($document_keywords)."\n";

                        $email_message .= " "."\n";
                        $email_message .= "Here is the link to view or download the document: "."\n";
                        $email_message .= $document_link . "\n";
                        $email_message .= " "."\n";
                        
                      
                      /*
                      echo '<pre>';
                      print_r($email_message);
                      echo '</pre>';
                      */
                      

                      // create email headers
                      $headers = 'From: '.$email_from."\r\n".
                      'Reply-To: '.$email_from."\r\n" .
                      'X-Mailer: PHP/' . phpversion();
                      mail($email_to, $email_subject, $email_message, $headers); 


                  }


          } else {
            echo 'Error inputting document details.';
          }

      } else {
        echo 'Error inputting user details.';
      }


    }

    
  

    ?>

		<div id="page-container">


    <div>

			<header> 
              <nav> 
                <ul>
                    <a href="../../index1.php" ><img src="../../../images/nav-home.png" class="nav-home" onmouseover="this.src='../../../images/nav-home-over.png'" onmouseout="this.src='../../../images/nav-home.png'"/></a>
                    <a href="../../experience-pcm/" ><img src="../../../images/nav-experience.png" class="nav-experience" onmouseover="this.src='../../../images/nav-experience-over.png'" onmouseout="this.src='../../../images/nav-experience.png'"/></a>
                    <a href="../../teach-pcm/" ><img src="../../../images/nav-teach.png" class="nav-teach" onmouseover="this.src='../../../images/nav-teach-over.png'" onmouseout="this.src='../../../images/nav-teach.png'"/></a>
                    <a href="../../library/" ><img src="../../../images/nav-resources-selected.png" class="nav-library"/></a>
                    <a href="../../store/products/book1/" ><img src="../../../images/nav-shop.png" class="nav-shop" onmouseover="this.src='../../../images/nav-shop-over.png'" onmouseout="this.src='../../../images/nav-shop.png'"/></a>
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
          

          <?php

          if($_POST['documentSubmit']) {
            
          }

          ?>
        

          <div id="catalog">
          
            <div id="first-column" class="column">
              <ul>
              <?php
              
              $firstColumns = $catalog -> getFirstColumnInfo();
              foreach($firstColumns as $firstColumn) {
                if($_POST['col1'] == $firstColumn['firstColumnCodeID']) {
                  echo '<li class="first-column-item selected-1" id="'.$firstColumn['firstColumnCodeID'].'"><img src="images/folder-icon.png" class="folder-icon"/>'.$firstColumn['firstColumnCategory'].'</li>'."\n";
                } else {
                  echo '<li class="first-column-item non-selected-1" id="'.$firstColumn['firstColumnCodeID'].'"><img src="images/folder-icon.png" class="folder-icon"/>'.$firstColumn['firstColumnCategory'].'</li>'."\n";
                }

                 
                } 
              ?>
               </ul>
            </div>


            <div id="second-column" class="column">              
              <?php
              foreach($firstColumns as $firstColumn) {
                if($_POST['col1'] == $firstColumn['firstColumnCodeID']) {
                  echo '<div class="second-column-menu displayClass" id="'.$firstColumn['firstColumnCodeID'].'-menu">'."\n";
                } else {
                  echo '<div class="second-column-menu" id="'.$firstColumn['firstColumnCodeID'].'-menu">'."\n";
                }
                 
                    echo '<ul>'."\n";
                $secondColumns = $catalog -> getSecondColumnInfoFromFirstColumnID($firstColumn['firstColumnCodeID']);
                foreach($secondColumns as $secondColumn) {
                  
                  if($secondColumn['secondColumnActive'] == false) {
                    echo '<li class="second-column-item-inactive"><img src="images/folder-icon.png" class="folder-icon"/>'.$secondColumn['secondColumnCategory'].'</li>'."\n";
                  } else {
                    if($_POST['col2'] == $secondColumn['secondColumnCodeID'] && $secondColumn['secondColumnActive'] != false) {
                      echo '<li class="second-column-item selected-2" id="'.$secondColumn['secondColumnCodeID'].'"><img src="images/folder-icon.png" class="folder-icon"/>'.$secondColumn['secondColumnCategory'].'</li>'."\n";
                    } else {
                      echo '<li class="second-column-item non-selected-2" id="'.$secondColumn['secondColumnCodeID'].'"><img src="images/folder-icon.png" class="folder-icon"/>'.$secondColumn['secondColumnCategory'].'</li>'."\n";
                    }
                    
                  }                

                } 
                    echo '</ul>'."\n";
                 echo '</div>'."\n";
                }               
              ?>
            </div>

            <div id="third-column" class="column">              
              <?php
              $secondColumns = $catalog -> getSecondColumnInfo();
              foreach($secondColumns as $secondColumn) {

                if($_POST['col2'] == $secondColumn['secondColumnCodeID'] && $secondColumn['secondColumnActive'] != false) {
                  echo '<div class="third-column-menu displayClass" id="'.$secondColumn['secondColumnCodeID'].'-menu">'."\n";
                } else {
                  echo '<div class="third-column-menu" id="'.$secondColumn['secondColumnCodeID'].'-menu">'."\n";
                }
                 
                    echo '<ul>'."\n";
                $documents = $catalog -> getDocumentInfoFromsecondColumnID($secondColumn['secondColumnCodeID']);

                if (is_array($documents)) {

                    foreach($documents as $document) {
                      echo '<div class="item-container">'."\n";
                      echo '<div class="icon-container"><img src="images/document-types/small-'.$document['documentType'].'.png" class="'.$document['documentType'].'-column-icon media-icon" /></div>'."\n";
                      echo '<div class="text-container"><li class="third-column-item non-selected-3" id="'.$document['documentIdName'].'">'.$document['documentTitle'].'</li></div>'."\n";
                      echo '</div>'."\n";
                    } 
          
                  }
              
                    echo '</ul>'."\n";
                 echo '</div>'."\n";
                }               
              ?>
            </div>


            <div id="fourth-column" class="column">    
            <?php
                    $documentResults = $catalog -> getAllDocuments();
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
                  if($_POST['col1'] == $firstColumn['firstColumnCodeID']) {
                  echo '<div id="'.$firstColumn['firstColumnCodeID'].'-breadcrumbOne" class="breadcrumbOne displayClass"><img src="images/folder-icon.png" class="breadcrumb-folder-icon"/><p>'.$firstColumn['firstColumnCategory'].'</p></div>'."\n";
                } else {
                  echo '<div id="'.$firstColumn['firstColumnCodeID'].'-breadcrumbOne" class="breadcrumbOne"><img src="images/folder-icon.png" class="breadcrumb-folder-icon"/><p>'.$firstColumn['firstColumnCategory'].'</p></div>'."\n";
                }
                   
                  } 
                ?>
              </div>
              
              <div id="breadcrumb-area-2" class="breadcrumb-section" >
                <?php
                $secondColumns = $catalog -> getsecondColumnInfo();
                foreach($secondColumns as $secondColumn) {
                  if($_POST['col2'] == $secondColumn['secondColumnCodeID']) {
                   echo '<div id="'.$secondColumn['secondColumnCodeID'].'-breadcrumbTwo" class="breadcrumbTwo displayClass"><img src="images/breadcrumb-arrow.png" class="breadcrumb-arrow"/><img src="images/folder-icon.png" class="breadcrumb-folder-icon"/><p>'.$secondColumn['secondColumnCategory'].'</p></div>'."\n";
                } else {
                   echo '<div id="'.$secondColumn['secondColumnCodeID'].'-breadcrumbTwo" class="breadcrumbTwo"><img src="images/breadcrumb-arrow.png" class="breadcrumb-arrow"/><img src="images/folder-icon.png" class="breadcrumb-folder-icon"/><p>'.$secondColumn['secondColumnCategory'].'</p></div>'."\n";
                }
                  
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

        <a onclick="history.go(-1)"><img src="images/submit-document-form/close-button.png" id="catalogue-close-button" /></a>
        <img src="images/submit-document-form/close-button.png" id="form-close-button" />

        <div id="documentSubmitFormContainer">
          <div id="documentSubmitForm">

            <!-- onsubmit="dosomething();dosomethingelse();onemorething();" -->

            <form id="document-submit-form" method="post" action="index.php" enctype="multipart/form-data">

                <h1>PCM Library</h1>

                <div id="form-fade">
                  <img src="images/pcm-logos/Pcm_Blue_Catalogue.png" alt="Blue PCM Logo" /> 
                  <img src="images/pcm-logos/Pcm_Brown_Catalogue.png" alt="Blue PCM Logo" />
                  <img src="images/pcm-logos/Pcm_Orange_Catalogue.png" alt="Blue PCM Logo" />
                  <img src="images/pcm-logos/Pcm_Purple_Catalogue.png" alt="Blue PCM Logo" />
                  <img src="images/pcm-logos/Pcm_Red_Catalogue.png" alt="Blue PCM Logo" />
                  <img src="images/pcm-logos/Pcm_Yellow_Catalogue.png" alt="Blue PCM Logo" />
                </div>

                <div class="clearDiv"></div>


                <div id="lineOne" class="seperateLine">

                <div class="leftLabels">
                <p>Your name<span>*</span></p>
                </div>

                <div class="nameInputContainer">
                <!-- First -->
                  <div class="nameInput">
                    <label for="firstName">First</label>
                    <input type="text" name="firstName" id="firstNameInput" value="" required  /> 
                  </div>

                  <!-- Last -->
                  <div class="nameInput">
                  <label for="lastName">Last</label>
                  <input type="text" name="lastName" id="lastNameInput" value=""   required   />
                  </div>

                </div>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineTwo" class="seperateLine">


                <div class="leftLabels">
                <p>Email<span>*</span></p>
                </div>
                <!-- Email -->
                <input type="email" name="email" id="emailInput" class="longInputBox" value=""  required    />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineThree" class="seperateLine">

                <div class="leftLabels">
                <p>Contact ph</p>
                </div>
                <!-- Conact Ph -->
                <input type="text" name="phone" id="phoneInput" class="longInputBox" value="" />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

          <div id="preview-form-fields">

                <div id="lineFour" class="seperateLine">    

                <div class="leftLabels">
                <p>Company details<br />
                (if applicable)</p>
                </div>  

                
                <!-- Company Name -->
                <label for="companyName">Name</label>
                <input type="text" name="companyName" class="longInputBox" id="companyNameInput" value="" />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineFive" class="seperateLine">

                <div class="halfInputContainer">
                <!-- First -->
                  <div id="companyWebsiteInputBox">

                <!-- Company Website -->
                <label for="companyWebsite">Website</label>
                <input type="text" name="companyWebsite" id="companyWebsiteInput" value="" />

                </div>

                <div id="companyEmailInputBox">

                <!-- Company Email -->
                <label for="companyEmail">Company Email</label>
                <input type="text" name="companyEmail" id="companyEmailInput" value="" />

                </div>

                </div>

                <div class="clearDiv"></div>

                </div>



                <!-- ////////////////////////////////////////// -->

                <div id="lineTwenty" class="seperateLine">

                <div class="leftLabels">
                <p>Attach company logo here<span>*</span></p>
                </div>

                <!-- Attach company logo here -->
                <input type="file" name="logoFile" id="logoFileSubmit" class="fileSubmitButton"  required   />

                <div class="clearDiv"></div>

                </div>


                <!-- ////////////////////////////////////////// -->

                <div id="lineSix" class="seperateLine">

                <div class="leftLabels">  
                <p>Document Title<span>*</span></p>
                </div>
                <!-- Document Title -->
                <input type="text" name="documentTitle" class="longInputBox" id="documentTitleInput" value=""   required   />
                
                <div class="clearDiv"></div>

                <span id="documentTitleError" class="errorMessage"></span>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineSeven" class="seperateLine">
                <div class="leftLabels">
                <p>Document Subtitle</p>
                </div>
                <!-- Document Subtitle -->
                <input type="text" name="documentSubtitle" class="longInputBox" id="documentSubtitleInput" value=""   />

                <div class="clearDiv"></div>

                <span id="documentSubtitleError" class="errorMessage"></span>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineEight" class="seperateLine">

                <div class="leftLabels">
                <p>Please select how<br />
                many Authors<span>*</span></p>
                </div>
                <!-- Authors -->
                <select name="authorNumber" id="authorNumber">
                  <option value="One">One</option>
                  <option value="Two">Two</option>
                  <option value="Three">Three</option>
                  <option value="Four">Four</option>
                  <option value="Five">Five</option>
                  <option value="Six">Six</option>
                </select>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineNine" class="seperateLine">

                <div class="leftLabels">
                <p>Author's Name(s)<span>*</span></p>
                </div>
                <!-- Authors Name -->

                <!-- To be dynamically added depending on how many authors are selected -->

                <div class="authorsNameInputBoxes" id="OneAuthorContainer">
                  <input type="text" name="authorsNameOne" id="authorsNameOneInput" value="" class="authorsNameInput"  required  />
                  <input type="text" name="authorsNameTwo" id="authorsNameTwoInput" value="" class="authorsNameInput"   />
                  <input type="text" name="authorsNameThree" id="authorsNameThreeInput" value="" class="authorsNameInput"      />
                  <input type="text" name="authorsNameFour" id="authorsNameFourInput" value="" class="authorsNameInput"      />
                  <input type="text" name="authorsNameFive" id="authorsNameFiveInput" value="" class="authorsNameInput"    />
                  <input type="text" name="authorsNameSix" id="authorsNameSixInput" value="" class="authorsNameInput"    />
                </div> 

                <div class="clearDiv"></div>

                <span id="documentAuthorError" class="errorMessage"></span>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->


                <div id="lineTen" class="seperateLine">

                <div class="leftLabels">
                <p>Are you the Author?</p>
                </div>
                <!-- Are you the Author -->
                <select name="isAuthor" id="isAuthor">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>

                <div id="hasPermissionContainer">
                <label for="hasPermission"><p>Do you have permission <br /> to submit this document?</p></label>
                </div>
                <!-- Have permission?-->
                <select name="hasPermission" id="hasPermission">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineEleven" class="seperateLine">

                <div class="leftLabels">
                <p>Author Credentials,<br />
                Title, Qualifications</p>
                </div>
                <!-- Author credentials-->
                <input type="text" name="authorCredentials" id="authorCredentialsInput" value="" class="longInputBox" />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineTwelve" class="seperateLine">

                <div class="leftLabels">
                <p>Date First Published</p>
                </div>
                <!-- Date First published -->
                <input type="date" name="datePublished" id="datePublishedInput" value="" />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="preview-line">

                <div class="leftLabels">
                <p>Preview your cover</p>
                </div>
                <!-- Attach document here -->

            
                <a href="preview.php" id="documentPreviewSubmit" rel="0" class="fileSubmitButton" value="Preview"></a>

                <div class="clearDiv"></div>

                </div>

          </div> <!-- End of the fields that are included in the Preview Document Function -->


                      <!-- ////////////////////////////////////////// -->

                <div id="lineFourteen" class="seperateLine">  

                <div class="leftLabels">
                <p>Library Category<span>*</span></p>
                </div>
                <!-- Library Category-->
                <select name="libraryCategory" id="libraryCategory"  required >
                  <option value="">Choose a Category</option>
                  <option value="testimonials">Testimonials</option>
                  <option value="what-is-pcm">What is PCM?</option>
                  <option value="pcm-in-action">PCM in action</option>
                  <option value="where-is-pcm-used">Where is PCM used?</option>
                  <option value="other">Other</option>
                </select>

                <!-- Sub Category-->
                <!-- The options that will be accessible will depend on the main category the user chooses-->

                <div class="library-sub-category" id="testimonials-subcategory">
                <label for="testimonialsSubcategory">Sub category</label>
                <select class="sub-category" name="testimonials-subcategory" id="testimonialsSubcategory">
                  <option value="">Choose a Sub category</option>
                  <option value="training-outcomes-evaluation">Training Outcomes Evaluation</option>
                  <option value="written">Written</option>
                  <option value="video">Video</option>
                </select>
                </div>

                <div class="library-sub-category" id="what-is-pcm-subcategory">
                  <label for="whatIsPCMSubcategory">Sub category</label>
                <select class="sub-category" name="what-is-pcm-subcategory" id="whatIsPCMSubcategory">
                  <option value="">Choose a Sub category</option>
                  <option value="academia">Academia</option>
                  <option value="articles">Articles</option>
                  <option value="background">Background</option>
                  <option value="dr-taibi-kahler">Dr Taibi Kahler</option>
                  <option value="general-information">General Information</option>
                  <option value="type-explanation">Type Explanation</option>
                  <option value="validation">Validation</option>
                </select>
                </div>

                <div class="library-sub-category" id="pcm-in-action-subcategory">
                  <label for="researchPublicationSubcategory">Sub category</label>
                <select class="sub-category" name="pcm-in-action-subcategory" id="researchPublicationSubcategory">
                  <option value="">Choose a Sub category</option>
                  <option value="advantage-of-pcm">Advantage of PCM</option>
                  <option value="building-teams">Building Teams</option>
                  <option value="culture-and-change">Culture &amp; Change</option>
                  <option value="difficult-interactions">Difficult Interactions</option>
                  <option value="management-and-leadership">Management &amp; Leadership</option>
                  <option value="self-management">Self Management</option>
                </select>
                </div>

                <div class="library-sub-category" id="where-is-pcm-used-subcategory">
                  <label for="whereIsPCMUsedSubcategory">Sub category</label>
                <select class="sub-category" name="where-is-pcm-used-subcategory" id="whereIsPCMUsedSubcategory">
                  <option value="">Choose a Sub category</option>
                  <option value="education">Education</option>
                  <option value="medicine">Medicine</option>
                  <option value="kahler-organisations-worldwide">Kahler Organisations Worldwide</option>
                  <option value="management">Management</option>
                  <option value="personal-relationships">Personal Relationships</option>
                </select> 
                </div>
            

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="other-subcategory" class="seperateLine other-sub-category"> 

                <div class="leftLabels">
                <p>If you selected 'other'<br />
                for 'library category',<br />
                please write a short<br />
                description here<span>*</span></p>
                </div>
                <!--Write Description-->
                <textarea   rows="4" cols="40" name="other-subcategory" id="documentDescriptionTextarea" class="textareaBox sub-category"  ></textarea>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineSixteen" class="seperateLine"> 

                <div class="leftLabels">
                <p>Document Excerpt<span>*</span><br />
                (40 words max)</p>
                </div>
                <!-- Document Excerpt -->
                <textarea   rows="4" cols="40" name="documentExcerpt" id="documentExcerptTextarea" class="textareaBox"   required  ></textarea>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineSeventeen" class="seperateLine"> 

                <div class="leftLabels">
                <p>Document format<span>*</span><br />
                (video, written, audio)</p>
                </div>
                <!-- Document format-->
                <select name="documentFormat" id="documentFormat"  required  >
                  <option value="">Choose a Format</option>
                  <option value="Video">Video</option>
                  <option value="Written">Written</option>
                  <option value="Audio">Audio</option>
                </select>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineEighteen" class="seperateLine">

                <div class="leftLabels">
                <p>Attach document here<span>*</span></p>
                </div>
                <!-- Attach document here -->
                <input type="file" name="documentFile" id="documentFileSubmit" class="fileSubmitButton"  />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineNineteen" class="seperateLine">

                <div class="leftLabels">
                <p>Keywords/phrases<span>*</span><br />
                These are the words<br />
                library users will 'search'<br />
                to find your document</p>
                </div>
                <!-- Keywords / phrases -->
                <textarea rows="4" cols="40" name="documentKeywords" id="documentKeywordsTextarea" class="textareaBox"   required    ></textarea>

                <div class="clearDiv"></div>

                </div>


                <!-- ////////////////////////////////////////// -->

                


                <div id="lineTwentyOne" class="seperateLine">

                <div class="leftLabels">
                <p>Submit for approval<span>*</span></p>
                </div>

                <input type="submit" name="documentSubmit" id="documentSubmitBtn" value="submit" />

                <div class="clearDiv"></div>

                </div>

          </form>

          <div class="clearDiv"></div>

        </div>

        <div class="clearDiv"></div>

    </div>


<!--////////////////////////////////////////////////////////////////////////-->

    <form method="post" action="search.php" id="searchDocumentToolbar">


        <select name="searchOption">
          <option value="Title">Title</option>
          <option value="Author">Author</option>
          <option value="Content">Content</option>
        </select>

  <input type="text" name="search" id="searchInput" value="" required />


  <input type="submit" name="searchSubmit" id="searchSubmit" value="Search" />

  <div class="clearDiv"></div>

  </form>


<!--////////////////////////////////////////////////////////////////////////-->

<div id="submitDocumentToolbar">
  <img src="images/document-toolbar/submit-new-document.png" />
  <button id="here-button">Here</button>
</div>

<!--////////////////////////////////////////////////////////////////////////-->


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