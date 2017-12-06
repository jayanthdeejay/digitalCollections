// JavaScript Document
if (parseInt(navigator.appVersion.substring(0,1))>=3){
  foldon = new Image(16, 16);
  foldon.src = "open.gif";
  foldoff = new Image(16, 16);
  foldoff.src = "fold.gif";

  fold3on = new Image(16, 16);
  fold3on.src = "open.gif";
  fold3off = new Image(16, 16);
  fold3off.src = "fold.gif";

  fold3aon = new Image(16, 16);
  fold3aon.src = "open.gif";
  fold3aoff = new Image(16, 16);
  fold3aoff.src = "fold.gif";

  fold4on = new Image(16, 16);
  fold4on.src = "open.gif";
  fold4off = new Image(16, 16);
  fold4off.src = "fold.gif";

  fold5on = new Image(16, 16);
  fold5on.src = "open.gif";
  fold5off = new Image(16, 16);
  fold5off.src = "fold.gif";

  fold2on = new Image(16, 16);
  fold2on.src = "open.gif";
  fold2off = new Image(16, 16);
  fold2off.src = "fold.gif";
}

function switchto(name, on) {
if (parseInt(navigator.appVersion.substring(0,1))>=3){
    image = eval(name + (on == 1 ? "on.src" : "off.src"));
    document.images[name].src = image;

  }
}

