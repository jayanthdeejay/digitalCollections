// JavaScript Document
// This script may only be used with the copyright notice intact. JanB.
// This script was found at http://simplythebest.net/scripts/dhtml_script_99.html.
//  It was extensively modified by Linda Newman.

var sub_d=document; 
var sub_nav=navigator.appName.indexOf("Microsoft");

function STBinit() {
STBs=new String(); 
Ta=new Array(); if(STBs!=null)
STBa=new Array(); 
for(x in Ta){ Tb=new Array();Tb=Ta[x].split(":");STBa[Tb[0]]=Tb[1];}
}


function SetC(n){ 
  if ((navigator.appVersion>'5.0') || (sub_nav>=0 && navigator.appVersion>'4.0' )) {
    STBinit(); sub_d.write((STBa[n]==1)?"<div id=\""+n+"\">":"<div id=\""+n+"\" style=\"display:none\">"); }
  else {
    sub_d.write("<div id=\""+n+"\">");}
}


function ToggleNode(n) {
  var row=document.getElementById(n);
  if (row.style.display=="none") {
    row.style.display="block";
  } else {
    row.style.display="none";
  }
}


function STB(n, name){
 if ((navigator.appVersion>'5.0') || (sub_nav>=0 && navigator.appVersion>'4.0')) { 
 Ta=document.getElementById(n).style.display;
 switch(Ta) {
  case "block": switchto(name,0);break; 
  case "none": switchto(name,1);break;
  case "": switchto(name,0);break; 
  default : switchto(name,1);}
 ToggleNode(n);}
else{d.location.reload();}
}


