  <!--begin subnavigation line-->

<% 
   if varbreadname="" then
%>
 <div id="subnav"> 

  <br/><script type="text/javascript">
		breadCrumbs("digital.libraries.uc.edu",">","index.asp","crumbtext","crumbtext","crumbtext","0", "0");
		</script>
<% else %>
 <div id="subnav"> 
  <br/><script type="text/javascript">
		breadCrumbs("digital.libraries.uc.edu",">","index.asp","crumbtext","crumbtext","crumbtext","0", "<%= varbreadname %>");
		</script>
<% end if %>

 <div id="subnavb">   || <a href="http://www.libraries.uc.edu">Libraries Home</a> | <a href="http://www.libraries.uc.edu/libraries/chem-bio/">Chemistry-Biology Library</a> | <a href="http://www.che.uc.edu/" target="_blank">Department of Chemistry</a> ||
</div>
</div>
