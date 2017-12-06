  <!--begin subnavigation line-->

 <div id="subnav"> 
<? if ($varbreadname=="") echo "<script type=\"text/javascript\">
		breadCrumbs(\"digital.libraries.uc.edu\",\">\",\"index.html\",\"crumbtext\",\"crumbtext\",\"crumbtext\",\"0\", \"0\")</script>";

else echo "<script type=\"text/javascript\">
		breadCrumbs(\"digital.libraries.uc.edu\",\">\",\"index.html\",\"crumbtext\",\"crumbtext\",\"crumbtext\",\"0\", \"$varbreadname\")</script>";
?>

 <div id="subnavb">   

<? 
if ($varloclink=="" || $varlocname=="") echo "<a href=\"http://www.libraries.uc.edu\">Libraries Home</a> | <a href=\"/\">Digital Collections Home</a>";

else echo "<a href=\"http://www.libraries.uc.edu\">Libraries Home</a> | <a href=\"$varloclink\">$varlocname</a>"; 
?>


</div>
</div>
