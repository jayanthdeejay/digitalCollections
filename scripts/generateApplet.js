// generateApplet function - requires 2 arrays of objects
// writes applet and param for active content

function generateApplet(AppletAttrs, params) 
{ 
  var str = '<applet';
  for (var i = 0; i<AppletAttrs.length; i++){
  	str += ' ' + AppletAttrs[i].name + '="' + AppletAttrs[i].value + '"';
    }
  str += '>';
   for (var i = 0; i<params.length; i++){
    str += '<param name="' + params[i].name + '" value="' + params[i].value + '" /> ';
	}

 str += '</Applet>';

  document.write(str);
}

// Name-value pair applet 
function NV_Pair(n,v){
	this.name = n;
	this.value = v;
	}