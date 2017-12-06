<!-- Begin
function NewWindow(mypage, myname) {
var winl = 0;
var wint=0;
var h=620;
var w=860;
if (h >= screen.height-150) {var h=screen.height-150; }
if (w >= screen.width-10) {var w=screen.width-10; }
winprops = 'location=no,status=no,menubar=yes,toolbar=yes,scrollbars=yes,height='+h+',width='+w+',innerheight='+h+',innerwidth='+w+',top='+wint+',left='+winl+',resizable'
win = window.open(mypage, myname, winprops)
if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
}
//  End -->