<?php
    session_name('preview');
    session_start();
?>


<!DOCTYPE html>



<html>



    <head>

        <title>Preview Cover Letter</title>

        <link rel="stylesheet" type="text/css" href="css/preview.css" />
        <!--<script type="text/javascript" src="js/preview.js"></script>-->
    

        <meta name="description" content="" />

        <meta name="keywords" content="" >

         <meta charset="utf-8" />



    </head>

    

    <body>

        <div id="cover-letter">

            <div id="document-details">

                <!--<img src="images/submit-document-form/close-button.png" id="preview-close-button" />-->

                <?php

                //This is the preview.php 

                
                

                echo '<h1>'.$_SESSION['documentTitle'].'</h1>'."\n";

                echo '<h2>'.$_SESSION['documentSubtitle'].'</h2>'."\n";

                echo '<div id="author-details">'."\n";

                echo '<h3>'.$_SESSION['authorsNameOne'].'</h3>'."\n";


                if($_SESSION['authorsNameTwo']) {
                    echo '<h3>'.$_SESSION['authorsNameTwo'].'</h3>'."\n";
                }

                if($_SESSION['authorsNameThree']) {
                    echo '<h3>'.$_SESSION['authorsNameThree'].'</h3>'."\n";
                }

                if($_SESSION['authorsNameFour']) {
                    echo '<h3>'.$_SESSION['authorsNameFour'].'</h3>'."\n";
                }

                if($_SESSION['authorsNameFive']) {
                    echo '<h3>'.$_SESSION['authorsNameFive'].'</h3>'."\n";
                }

                if($_SESSION['authorsNameSix']) {
                    echo '<h3>'.$_SESSION['authorsNameSix'].'</h3>'."\n";
                }

                echo '</div>'."\n";



                if($_SESSION['companyName']) {
                    echo '<h4>'.$_SESSION['companyName'].'</h4>'."\n";
                }

                if($_SESSION['companyWebsite']) {
                    echo '<h4>'.$_SESSION['companyWebsite'].'</h4>'."\n";
                }

                if($_SESSION['companyEmail']) {
                    echo '<h4>'.$_SESSION['companyEmail'].'</h4>'."\n";
                }

                echo '<img src="images/pcm-logos/your-logo-goes-here.png" id="users-logo" />'."\n";

                ?>


            </div>

            <div id="footer">

                <p>process communication model can be utilised in so many different areas of life. in motivation, in conflict resolution, in learning how second by second, interaction by interaction an employess, colleague, family member or friend can be motivated to be the very best they can possibly be.</p>

                <p><strong>www.pcmoceania.com</strong> contact@pcmoceania.com</p>

                <?php

                    include 'php/catalog.php';
                    $catalog = new Catalog;

                    $lastDocumentID = $catalog -> getLastDocumentID();

                    $lastPCMLogoID = $catalog -> getLastPCMLogo($lastDocumentID['MAX(documentID)']);

                    if($lastPCMLogoID['logoID'] == 6){
                    $newLogoId = 1;
                  } else {
                    $newLogoId = $lastPCMLogoID['logoID'] + 1;
                  }

                  $newPCMLogo = $catalog -> getNewPCMLogo($newLogoId);

                  echo '<img src="images/pcm-logos/'.$newPCMLogo['logoName'].'" id="pcm-logo" />'."\n";

                ?>

                


            </div>


        </div>
 
    </body>



</html>



<?php

unset($_SESSION['documentTitle']); // Repeat for any parameter used
unset($_SESSION['documentSubtitle']);
unset($_SESSION['authorsNameOne']);
unset($_SESSION['authorsNameTwo']);
unset($_SESSION['authorsNameThree']);
unset($_SESSION['authorsNameFour']);
unset($_SESSION['authorsNameFive']);
unset($_SESSION['authorsNameSix']);
unset($_SESSION['companyName']);
unset($_SESSION['companyWebsite']);
unset($_SESSION['companyEmail']);

session_destroy();

/*





$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 0, 0, $white);


//$fontHeight = imagefontheight("Helvetica-Neue-Regular.otf");

imagewrapttftext($im, 36, 0, 75, 135, $black, "Helvetica-Neue-Rounded-Bold.ttf", $documentTitle);

imagewrapttftext($im, 15, 0, 75, 165, $black, "Helvetica-Neue-Regular.otf", $documentSubtitle);

// Draw border 
$color_black = ImageColorAllocate($im, 0, 0, 0); 
drawBorder($im, $color_black, 1); 


imagepng($im);
imagedestroy($im);
*/


?>

