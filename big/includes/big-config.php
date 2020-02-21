<?php

/*
big-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));



switch(THIS_PAGE){

    case 'index.php':
        $title = "Joey's BIG Home Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case '../index.php':
        $title = "Joey's WEB120 Portal Page";
        $logo = "fa-chevron-left";
        $PageID = "Portal";
    break;
    
    case 'responsive.php':
        $title = "Responsive Research";
        $logo = 'fa-file-alt';
        $PageID = 'Responsive';
    break;
    
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-file-alt';
        $PageID = 'Flexbox';
    break;
    
    case 'galleries.php':
        $title = "Galleries Research";
        $logo = 'fa-file-alt';
        $PageID = 'Galleries';
    break;
    
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-calendar';
        $PageID = 'Calendar';
    break;
    
    case 'map.php':
        $title = "Google Map";
        $logo = 'fa-map';
        $PageID = 'Map';
    break;
    
    case 'youtube.php':
        $title = "Youtube";
        $logo = 'fa-youtube';
        $PageID = 'Youtube';
    break;
    
    case 'webcam.php':
        $title = "Webcams";
        $logo = 'fa-camera';
        $PageID = 'Webcam';
    break;
    
//create a default statement for fallback     
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
            
   }

//place URL & labels in the array here for navigation:
$nav1['../index.php'] = "WEB 120 Portal";
$nav1['index.php'] = "Home";
$nav1['responsive.php'] = "Responsive";
$nav1['flexbox.php'] = "Flexbox";
$nav1['galleries.php'] = "Galleries";
$nav1['calendar.php'] = "Calendar";
$nav1['map.php'] = "Map";
$nav1['youtube.php'] = "Youtube";
$nav1['webcam.php'] = "Webcam";


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>