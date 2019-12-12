function absen(y){
  var pres = document.getElementById('cek1').value;
  //cekpas();
  // var hour=today.getHours();
  // var minute=today.getMinutes();
  // var second=today.getSeconds();
  // if(hour<10){
  //   hour = "0"+hour;
  // }
  // if(minute<10){
  //   minute = "0"+minute;
  // }
  // if(second<10){
  //   second = "0"+second;
  // }
  var url = "http://localhost/uji/proses.php?absen="+pres+"&"+"no="+y;
  window.location.href=url;
}

function addmhs() {
  var url = "http://localhost/uji/Dasboard.php?in=2";
  window.location.href=url;
}

function presentend() {
  var baca = document.getElementsByClassName('tgl');
  var url = "";
  if(baca.length>=1){
    var url = "http://localhost/uji/Dasboard.php?in=1";
  }else{
    alert("Akses lanjut ditolak!! Mahasiswa Kosong");
  }
  window.location.href=url;

}
function bckabsen() {
  var url = "http://localhost/uji/Dasboard.php";
  window.location.href=url;
}
