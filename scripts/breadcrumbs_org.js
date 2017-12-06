// JavaScript Document
function breadCrumbs(base,delStr,defp,cStyle,tStyle,dStyle,nl) { // by Paul Davis - http://www.kaosweaver.com
loc=window.location.toString();subs=loc.substr(loc.indexOf(base)+base.length+1).split("/");
 document.write('<a href="'+getLoc(subs.length-1)+defp+'" class="'+cStyle+'">Digital Projects Home</a>  '+'<span class="'+dStyle+'">'+delStr+'</span> ');
 a=(loc.indexOf(defp)==-1)?1:2;for (i=0;i<(subs.length-a);i++) { subs[i]=makeCaps(unescape(subs[i]));
 document.write('<a href="'+getLoc(subs.length-i-2)+defp+'" class="'+cStyle+'">'+subs[i]+'</a>  '+'<span class="'+dStyle+'">'+delStr+'</span> ');}
 if (nl==1) document.write("<br>");document.write('<span class="'+tStyle+'">'+document.title+'</span>');
}
function makeCaps(a) {
  g=a.split(' ');for (l=0;l<g.length;l++) g[l]=g[l].toUpperCase().slice(0,1)+g[l].slice(1);
  return g.join(" ");
}
function getLoc(c) {
  var d="";if (c>0) for (k=0;k<c;k++) d=d+"../"; return d;
}
