<?php
//used for includes later on…
$path = $_SERVER['DOCUMENT_ROOT'];
$currentPage = $_SERVER['PHP_SELF'];
//get the template
$template = file_get_contents("http://libraries.uc.edu/special-collections/template.html");
//the original template has relative links, we have to make them absolute using str_replace before we display things
//there are several different paths on the template
//NOTE: When the site goes live, I need to change some of these values
//such that anything with http://staging-cms.uc.edu/content/
//will become http://libraries.uc.edu/
$template = str_replace("src=\"/etc/","src=\"https://www.uc.edu/etc/",$template);
$template = str_replace("href=\"/etc/","href =\"https://www.uc.edu/etc/",$template);
$template = str_replace("src=\"/apps/","src =\"https:/www./uc.edu/apps/",$template);
$template = str_replace("href=\"/","href =\"http://libraries.uc.edu/",$template);
$template = str_replace("src=\"/","src=\"http://libraries.uc.edu/",$template);
//this takes the template and breaks it apart at the words “Insert content here”
//then you position $top and $bottom where you want it.
//See attached: search.php – the variables are on lines 72 and 139
list($top, $bottom) = explode('INSERT CONTENT HERE', $template);
?>

