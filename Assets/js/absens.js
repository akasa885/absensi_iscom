var absen = [];
var k = 0;
var b;

$("#masukan button").click(function() {
  var b = $(this).val();
  var index;
  if($(this).hasClass('absenss-oke')){
      $(this).removeClass('absenss absenss-oke');
      $(this).addClass('absenss');
    for (var i = 0; i < absen.length; i++) {
      if(b === absen[i]){
        index = i;
      }
    }
    if(index === 0){
        var potong = absen.splice(index,index+1);
    }else{
      var potong = absen.splice(index,index);
    }
  }else{
    $(this).addClass('absenss-oke');
    alert(b);
    absen[k] = b;
    k = k+1;
  }
});
