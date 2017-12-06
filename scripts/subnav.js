//JavaScript Document
function CallbreadCrumbs(varbreadname) {
if (varbreadname==null) varbreadname="0";
breadCrumbs("digital.libraries.uc.edu",">","index.html","crumbtext","crumbtext","crumbtext","0", varbreadname);
}

function LinksTopRight (varloclink, varlocname) {
if (varloclink==null || varlocname==null)
   document.write ('<a href="http://www.libraries.uc.edu">Libraries Home</a> | <a href="/">Digital Collections Home</a>');
else 
   document.write ('<a href="http://www.libraries.uc.edu">Libraries Home</a> | <a href="'+varloclink+'">'+varlocname+'</a>'); 
}

