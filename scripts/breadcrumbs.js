// JavaScript Document
function breadCrumbs(base,delStr,defp,cStyle,tStyle,dStyle,nl,specTitle) { // by Paul Davis - http://www.kaosweaver.com
loc=window.location.toString();
subs=loc.substr(loc.indexOf(base)+base.length+1).split("/");
 document.write('<a href="'+getLoc(subs.length-1)+""+'" class="'+cStyle+'">Digital Collections Home</a>  '+'<span class="'+dStyle+'">'+delStr+'</span> ');

//no matter whether this script has been called with index.html or index.php for defp, change to ""
defp="";

//if file is default page then go to ../ not ../index.php or ../index.html for one step up.
//if (subs[subs.length-1]=='index.php')
if (subs[subs.length-1].indexOf('index.php')!=-1)
   a='2';
else   
if (subs[subs.length-1]=='index.html')
   a='2';
else   
//if file ends in '/' rather than /index.html or index.php don't duplicate itself as its own parent:
if (subs[subs.length-1]=='')
   a='2';
else	
   a='1';

//if defp is found a = 2, else a = 1
// a=2 means go to parent directory, a=1 means go to default page in same directory
//no longer do the following line -- do the above instead
//a=(loc.indexOf(defp)==-1)?1:2;
											 
				
for (i=0;   i<(subs.length-a);  i++) 
   { 
 subs[i]=makeCaps(unescape(subs[i]));
//document.write('<a href="'+getLoc(subs.length-i-2)+defp+'" class="'+cStyle+'">'+subs[i]+'</a>  '+'<span class="'+dStyle+'">'+delStr+'</span> ');}
//add last value of array for testing:
document.write('<a href="'+getLoc(subs.length-i-2, subs[subs.length-1])+defp+'" class="'+cStyle+'">'+subs[i]+'</a>  '+'<span class="'+dStyle+'">'+delStr+'</span> ');}
  if (nl==1) document.write("<br>");

//the addition of specTitle allows specTitle to be used instead of document.title-- Linda Newman
  if (specTitle==null) 
     specTitle="0";
  if (specTitle =="0") 
      document.write('<span class="'+tStyle+'">'+document.title+'</span>'); 
  else 
      document.write('<span class="'+tStyle+'">'+specTitle+'</span>');
 
}

function makeCaps(a) {
  g=a.split(' ');for (l=0;l<g.length;l++) g[l]=g[l].toUpperCase().slice(0,1)+g[l].slice(1);
  return g.join(" ");
}

function getLoc(c,z) {
//  var d="";if (c>0) for (k=0;k<c;k++) d=d+"../"; return d;
  var d="";
  if (c>0) for (k=0;k<c;k++) d=d+"../"; 
  //if c is 0 then it should be a non default page and z should be found in the string
  if (c==0)  {
    loc2=window.location.toString();
    if (loc2.indexOf(z)==-1) 
	 d="";
	else
	 d=loc2.substr(0, loc2.indexOf(z));
   }
  return d;
}

