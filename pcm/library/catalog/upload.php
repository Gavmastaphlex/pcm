<?php


function calculateTextBox($size, $angle, $fontfile, $text) { //found on http://php.net/manual/en/function.imagettfbbox.php
    $rect = imagettfbbox($size, $angle, $fontfile, $text);

    /*
    imagettfbbox() returns an array with 8 elements representing four points making the bounding box of the text on success and FALSE on error.w

    key contents
    0   lower left corner, X position
    1   lower left corner, Y position
    2   lower right corner, X position
    3   lower right corner, Y position
    4   upper right corner, X position
    5   upper right corner, Y position
    6   upper left corner, X position
    7   upper left corner, Y position

   Example Array
(
    [0] => 0 // lower left X coordinate
    [1] => -1 // lower left Y coordinate
    [2] => 198 // lower right X coordinate
    [3] => -1 // lower right Y coordinate
    [4] => 198 // upper right X coordinate
    [5] => -20 // upper right Y coordinate
    [6] => 0 // upper left X coordinate
    [7] => -20 // upper left Y coordinate
)


    */


    //x coordinates (using 0, 2, 4, 6)
    $minX = min(array($rect[0],$rect[2],$rect[4],$rect[6]));
    $maxX = max(array($rect[0],$rect[2],$rect[4],$rect[6]));

    //y coordinates (using 1, 3, 5, 7)
    $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
    $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));

    

    return array(

        /*abs returns whole numbers (for negative numbers it returns positive numbers)*/
        "left"   => abs($minX) - 1,
        "top"    => abs($minY) - 1,
        "width"  => $maxX - $minX,
        "height" => $maxY - $minY,
        "box"    => $rect
    );
}


function imagewrapttftext($image, $size, $angle, $x, $y, $color, $fontfile, $text) {
    if(empty($text)){
        return true; // satisfied; job complete.
    }
    for($i = 0, $relWidth = $x; $i < strlen($text); $i++){


        //Calling on calculateTextBox() function twice
        $boundingbox = calculateTextBox($size, $angle, $fontfile, $text[$i]);
        $tallestLetter = calculateTextBox($size, $angle, $fontfile, "|");

        //boundingbox value from 3 lines before
        $relWidth += $boundingbox['width'];


        if($relWidth > imagesx($image)){
            //imagesx = Returns the width of the given image resource.

            $tempString = explode(" ", substr($text, 0, $i));
            /*substr (string $string , int $start [, int $length ] )
            Returns the portion of string specified by the start and length parameters.

            The returned string will start at the start'th position in string,
            counting from zero. In the string 'abcdef', the character at position 0 is 'a',
            the character at position 2 is 'c', and so forth.

            array explode ( string $delimiter , string $string [, int $limit ] )
            Returns an array of strings, each of which is a substring of string formed by
            splitting it on boundaries formed by the string delimiter.
            */

            
            $offsetIdentifier = array_pop($tempString);
            /*array_pop() pops and returns the last value of the array, shortening
            the array by one element. If array is empty (or is not an array), NULL will
            be returned. Will additionally produce a Warning when called on a non-array.*/


            imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, implode(" ", $tempString));
            /*
            imagettfbbox() returns an array with 8 elements representing four points
            making the bounding box of the text on success and FALSE on error.w

            key contents
            0   lower left corner, X position
            1   lower left corner, Y position
            2   lower right corner, X position
            3   lower right corner, Y position
            4   upper right corner, X position
            5   upper right corner, Y position
            6   upper left corner, X position
            7   upper left corner, Y position
            */


            $newText = substr($text, $i - strlen($offsetIdentifier), strlen($text));
            imagewrapttftext($image, $size, $angle, $x, $y + $tallestLetter['height'], $color, $fontfile, $newText);
            break;
        }
        if($i == strlen($text)-1){
            imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
            return true; //satisfied; job complete.
            break;
        }
    }
}  

// Draw a border 
function drawBorder(&$im, &$color, $thickness = 1) 
{ 
    $x1 = 0; 
    $y1 = 0; 
    $x2 = ImageSX($im) - 1; 
    $y2 = ImageSY($im) - 1; 

    for($i = 0; $i < $thickness; $i++) 
    { 
        ImageRectangle($im, $x1++, $y1++, $x2--, $y2--, $color_black); 
    } 
} 


header("Content-type: image/png");

// Create the image
$im = imagecreatetruecolor(595, 842);


$documentTitle = $_POST['documentTitle'];


$documentSubtitle = $_POST['documentSubtitle'];

$authors['nameOne'] = $_POST['authorsNameOne'];

if($_POST['authorsNameTwo']) {
	$authors['nameTwo'] .= $_POST['authorsNameTwo'];
}

if($_POST['authorsNameThree']) {
	$authors['nameThree'] .= $_POST['authorsNameThree'];
}

if($_POST['authorsNameFour']) {
	$authors['nameFour'] .= $_POST['authorsNameFour'];
}

if($_POST['authorsNameFive']) {
	$authors['nameFive'] .= $_POST['authorsNameFive'];
}

if($_POST['authorsNameSix']) {
	$authors['nameSix'] .= $_POST['authorsNameSix'];
}

if($_POST['companyName']) {
	$companyDetails['companyName'] .= $_POST['companyName'];
}

if($_POST['companyWebsite']) {
	$companyDetails['companyWebsite'] .= $_POST['companyWebsite'];
}

if($_POST['companyEmail']) {
	$companyDetails['companyEmail'] .= $_POST['companyEmail'];
}

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


?>