function sdatein() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1;
  var yyyy=today.getFullYear();
  if(dd<10){
    dd = "0"+dd;
  }
  if(mm<10){
    mm = "0"+mm;
  }
  today = yyyy+"-"+mm+"-"+dd;
  var url = "http://localhost/uji/proses.php?hari="+today;
  window.location.href=url;
}
