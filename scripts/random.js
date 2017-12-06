//<![CDATA[

// Advanced Random Images Start
// Copyright 2001-2002 All rights reserved, by Paul Davis - www.kaosweaver.com
  var j,d="",l="",m="",p="",q="",z="",KW_ARI= new Array(), KW_TIT=new Array()
  KW_ARI[KW_ARI.length]='../images/ran/image1.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image2.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image3.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image4.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image5.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image6.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image7.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image8.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image9.jpg';
  KW_ARI[KW_ARI.length]='../images/ran/image10.jpg';
  KW_TIT[KW_TIT.length]='from George Catlin: The Printed Works';
  KW_TIT[KW_TIT.length]='from McKenney &amp; Hall';
  KW_TIT[KW_TIT.length]='from DAAP Digital Image Teaching Collection';
  KW_TIT[KW_TIT.length]='from Lewis &amp; Clark: A Journey';
  KW_TIT[KW_TIT.length]='from Art as Image';
  KW_TIT[KW_TIT.length]='from DAAP Digital Image Teaching Collection';
  KW_TIT[KW_TIT.length]='from DAAP Digital Image Teaching Collection';
  KW_TIT[KW_TIT.length]='from George Catlin: The Printed Works';
  KW_TIT[KW_TIT.length]='from McKenney &amp; Hall';
  KW_TIT[KW_TIT.length]='from McKenney &amp; Hall';
  j=parseInt(Math.random()*KW_ARI.length);
  j=(isNaN(j))?0:j;
  if (KW_ARI[j].indexOf('?')==-1) {
    document.write("<img src='"+KW_ARI[j]+"'alt='"+KW_TIT[j]+"'title='"+KW_TIT[j]+"'width='"+360+"'height='"+70+"'border='"+0+"'hspace='"+0+"'vspace='"+0+"'>");
 }
  else {
    nvp=KW_ARI[j].substring(KW_ARI[j].indexOf('?')+2).split('&');
    for(var i=0;i<nvp.length;i++) {
      sub=nvp[i].split('=');
   	  switch(sub[0]) {
 	    case 'link':
          l="<a href='"+unescape(sub[1])+"'>";
          p="</a>";
		  break;
	    case 'target':
          q=" target='"+unescape(sub[1])+"'";
  		  break;
  	    default:
          m+=" "+sub[0]+"='"+unescape(sub[1])+"'";
  		  break;
      }
    }
    z=(l!="")?((q!="")?l.substring(0,l.length-1)+q+">":l):"";
    z+="<img src='"+KW_ARI[j].substring(0,KW_ARI[j].indexOf('?'))+"'"+m+">"+p;
  document.write(z);
  }


//]]>