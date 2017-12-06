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

 <div id="subnavb">   || <a href="http://www.libraries.uc.edu">Libraries Home</a> | <a href="\"> Digital Projects Home</a> | <a href="http://www.ucdp.uc.edu" target="_blank">Digital Press Home</a> ||
</div>
</div>
