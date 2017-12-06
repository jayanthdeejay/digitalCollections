            <!-- Begin Quicklinks -->
            <div id="qliw">
  <div id="qltext" role="navigation">
   <h2>Quicklinks</h2>
  <ul>
<li class="none"><a href="http://digital.libraries.uc.edu/luna/servlet/allCollections">UC Libraries Digital Collections (Luna)</a></li>
  <li class="none"><a 
href="http://drc.libraries.uc.edu">UC Digital Resource Commons (OhioLINK)</a></li>
  <li class="none"><a href="/projects/index.html">Digital Collections list</a></li>
<li class="none"><a
href="/exhibits/index.html">Exhibits</a></li>
  <li class="none"><a 
href="/">Digital Collections home</a></li>
  <li class="none"><a 
href="http://www.libraries.uc.edu/">UC Libraries home</a></li>
  <li class="none"><a 
href="/help/index.html">Help &amp; Feedback</a></li>
</ul>

  <div class="ui-accordion ui-widget ui-helper-reset" id="accordion" 
role="tablist">
    <h2 tabindex="0" aria-expanded="false" role="tab" 
class="ui-accordion-header ui-helper-reset ui-state-default 
ui-corner-all"><span class="ui-icon ui-icon-triangle-1-e"></span><a 
tabindex="-1" href="#">Site Search <img 
src="/images/down.png" alt="More" width="22" 
align="absmiddle" border="0" height="22"></a></h2>
    <div role="tabpanel" style="height: 55px; display: none;" 
class="ui-accordion-content ui-helper-reset ui-widget-content 
ui-corner-bottom">
      
<SCRIPT TYPE="text/javascript">
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
</SCRIPT>


      <p></p>
<form id="form1" class="yform" method="post" action="http://digital.libraries.uc.edu" onSubmit="return dropdownsitesearch (this.goSearchurl, this.goSearchquery)">
        <p>
          <label>For:            
            <input name="goSearchquery" id="search" size="18" type="text">
          </label>
          In:&nbsp;
          
          <select name="goSearchurl" id="select">
            <option value="http://search.uc.edu/search?client=libraries_frontend&site=LIBRARIES&output=xml_no_dtd&proxystylesheet=libraries_frontend&ie=UTF-8&oe=UTF-8&as_epq=&as_oq=&as_eq=&lr=&as_occt=any&as_dt=i&as_sitesearch=digital.libraries.uc.edu&sort=&num=10&btnG.x=15&btnG.y=17&btnG=Submit+Search&as_lq=" selected="selected">Digital Collections Site</option>
            <option value="http://search.uc.edu/search?&btnG.x=18&btnG.y=13&btnG=Search&entqr=0&output=xml_no_dtd&sort=date%3AD%3AL%3Ad1&ud=1&ie=UTF-8&oe=UTF-8&proxystylesheet=libraries_frontend&site=LIBRARIES&client=libraries_frontend">Library Web site</option>
          </select>
          <span class="type-button">
          <input value="submit" id="submit" name="submit" type="submit">
          </span>
       </p>
      </form>


    </div>

 </div>

</div>
</div>
<!--end quicklinks-->
