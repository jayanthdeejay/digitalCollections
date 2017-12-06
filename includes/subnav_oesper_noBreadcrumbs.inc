<?php
 //<!--begin subnavigation line-->

//if ($varbreadname=="")
// echo "<div id=\"subnav\"> 
// <script type=\"text/javascript\">
//		breadCrumbs(\"digital.libraries.uc.edu\",\">\",\"index.html\",\"crumbtext\",\"crumbtext\",\"crumbtext\",\"0\", \"0\");
//		</script>";
//	
//else
// echo "<div id=\"subnav\"> 
//  <script type=\"text/javascript\">
//		breadCrumbs(\"digital.libraries.uc.edu\",\">\",\"index.html\",\"crumbtext\",\"crumbtext\",\"crumbtext\",\"0\", \"$varbreadname\");
//		</script>";

 echo "<div id=\"subnav\"><a href=\"http://digital.libraries.uc.edu\">Digital Collections Home</a> | <a href=\"http://digital.libraries.uc.edu/oesper/\">Oesper Collections</a>";
		
 echo "<div id=\"subnavb\">   <a href=\"http://www.libraries.uc.edu\">Libraries Home</a> | <a href=\"http://www.libraries.uc.edu/libraries/chem-bio/\">Chemistry-Biology Library</a> | <a href=\"http://www.che.uc.edu/\" target=\"_blank\">Department of Chemistry</a>
</div>
</div>";

//<!-- end header -->

echo "</div>";

if ($varmainwidth=="")
echo "<div id=\"main1\" align=\"center\">";
else if ($varmainwidth > 780)
echo "<div id=\"main1\" align=\"center\" style=\"width: $varmainwidth","px;\">";
else
echo "<div id=\"main1\" align=\"center\">";

?>
