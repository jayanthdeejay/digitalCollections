// generateObj function - requires 3 arrays of objects
// writes object, param and embed tags for active content

function generateObj(objAttrs, params, embedAttrs) 
{ 
  var str = '<object';
  for (var i = 0; i<objAttrs.length; i++){
  	str += ' ' + objAttrs[i].name + '="' + objAttrs[i].value + '"';
    }
  str += '>';
   for (var i = 0; i<params.length; i++){
    str += '<param name="' + params[i].name + '" value="' + params[i].value + '" /> ';
	}
  str += '<embed';
   for (var i = 0; i<embedAttrs.length; i++){
    str += ' ' + embedAttrs[i].name + '="' + embedAttrs[i].value + '"';
	}
  str += ' ></embed></object>';
  document.write(str);
}

// Name-value pair object 
function NV_Pair(n,v){
	this.name = n;
	this.value = v;
	}