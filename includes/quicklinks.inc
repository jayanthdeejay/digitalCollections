   <!-- Begin Quicklinks -->

<div class="qliw">
   <h2>Quicklinks</h2>
  <ul>
<li><a href="http://digital.libraries.uc.edu/luna/servlet/allCollections">UC Libraries Digital Collections (Luna)</a></li>
  <li><a href="http://drc.libraries.uc.edu">UC Digital Resource Commons (OhioLINK)</a></li>
  <li><a href="/projects/index.html">Digital Collections list</a></li>
<li><a href="/exhibits/index.html">Exhibits</a></li>
  <li><a href="/">Digital Collections home</a></li>
  <li><a href="http://www.libraries.uc.edu/">UC Libraries home</a></li>
  <li><a href="/help/index.html">Help &amp; Feedback</a></li>
</ul>

  <div class="ui-accordion ui-widget ui-helper-reset" id="accordion" 
role="tablist">
    <h2 tabindex="0" area-expanded="false" role="tab" 
class="ui-accordion-header ui-helper-reset ui-state-default 
ui-corner-all"><span class="ui-icon ui-icon-triangle-1-e"></span><a 
tabindex="-1" href="#">Site Search <img 
src="/images/down.png" alt="More" width="22" 
align="absmiddle" border="0" height="22"/></a></h2>
    <div role="tabpanel" style="height: 55px; display: none;" 
class="ui-accordion-content ui-helper-reset ui-widget-content 
ui-corner-bottom">
      
<script type="text/javascript">
<!--
function dropdownsitesearch(mySel,myQuery)
{
var myWin, myVal;
myVal = mySel.options[mySel.selectedIndex].value;
myVal = myVal + "&as_q=" + myQuery.value;
if(myVal)
   {
   if(mySel.form.target) myWin = parent[mySel.form.target];
   else myWin = window;
   if (! myWin) return true;
   myWin.location = myVal;
   }
return false;
}
//-->
</script>


      <p></p>
<form id="form1" class="yform" method="post" action="http://digital.libraries.uc.edu" onsubmit="return dropdownsitesearch (this.goSearchurl, this.goSearchquery)">
        <p>
          <label>For:            
            <input name="goSearchquery" id="search" size="18" type="text"/>
          </label>
          In:&nbsp;
          
          <select name="goSearchurl" id="select">
            <option value="http://search.uc.edu/search?client=libraries_frontend&amp;site=LIBRARIES&amp;output=xml_no_dtd&amp;proxystylesheet=libraries_frontend&amp;ie=UTF-8&amp;oe=UTF-8&amp;as_epq=&amp;as_oq=&amp;as_eq=&amp;lr=&amp;as_occt=any&amp;as_dt=i&amp;as_sitesearch=digital.libraries.uc.edu&amp;sort=&amp;num=10&amp;btnG.x=15&amp;btnG.y=17&amp;btnG=Submit+Search&amp;as_lq=" selected="selected">Digital Collections Site</option>
            <option value="http://search.uc.edu/search?&amp;btnG.x=18&amp;btnG.y=13&amp;btnG=Search&amp;entqr=0&amp;output=xml_no_dtd&amp;sort=date%3AD%3AL%3Ad1&amp;ud=1&amp;ie=UTF-8&amp;oe=UTF-8&amp;proxystylesheet=libraries_frontend&amp;site=LIBRARIES&amp;client=libraries_frontend">Library Web site</option>
          </select>
          <span class="type-button">
          <input value="submit" id="submit" name="submit" type="submit"/>
          </span>
       </p>
      </form>


    </div>

 </div>


</div>


<!--end quicklinks-->
