var masuk = "";
var pas = 0;
mshow();
function mshow() {
  var i;
  var panel = document.getElementsByClassName("swipe");
  var menu = document.getElementsByClassName("menu");
  for(i=0;i < panel.length;i++){
    panel[i].style.display = "none";
  }
  for(i=0;i < menu.length;i++){
    menu[i].className = menu[i].className.replace(" active","");
  }
  var masuk = sgetUrl("in");
  if(masuk == "1"){
    //entry data pengajar
    panel[0].style.display = "block";
    menu[1].className += " active";
  }else if (masuk == "2") {
    //tambah mahasiswa
    panel[2].style.display = "block";
    menu[0].className += " active";
  }else if (masuk == "3") {
    alert("today scedule already inserted!");
    panel[0].style.display = "block";
    menu[1].className += " active";
  }else{
    //absensi
    panel[1].style.display = "block";
    menu[0].className += " active";
  }
}

function sgetUrl(sParam) {
  var sPageUrl = window.location.search.substring(1);
  var sURLVariabel = sPageUrl.split('&');
  for(var i = 0; i<sURLVariabel.length;i++)
  {
    var sParameterName = sURLVariabel[i].split('=');
    if(sParameterName[0] === sParam)
    {
      return sParameterName[1];
    }
  }
}
