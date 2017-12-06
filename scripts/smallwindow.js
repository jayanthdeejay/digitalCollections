<!-- Begin
function smallwindow(mysource, mydestination, myname, w, h, x, y) {

window.name = mysource;

var wint = y;

var winl = x;

if (screen.width - w - 30 < winl) var winl=screen.width-30-w;

if (screen.height - h -100 < wint) var wint = screen.height-h-100;

if (winl < 0) var winl=0;
if (wint < 0) var wint=0;


winprops = 'location=no,menubar=no,toolbar=no,scrollbars=yes,directories=no, status=no, height='+h+',width='+w+',top='+wint+',left='+winl+',resizable'
win = window.open(mydestination, myname, winprops)
if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
if (window.focus) {win.focus()}

}
//  End -->