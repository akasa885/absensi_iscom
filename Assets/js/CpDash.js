$(document).ready(function(){
  $('#lanjut button').click(function(){
    alert("Mengirim data");
    var myJSONText = JSON.stringify(absen);
    $.ajax({
       type: "POST",
       url: urlutama+"ajax",
       data: { kvcArray : myJSONText },
       cache: false,
       success: function(data) {
          if(data = true){
            setTimeout(function() {
              location.reload();
            }, 2000)
          }
       },
       error: function() {
         alert("gagal");
       }
    });
  })
  $('#formnambah').submit(function(e) {
      e.preventDefault();
  })
  $('input[id=nambahs]').click(function() {
    alert("Menambah Mahasiswa");
    $.ajax({
      type: "post",
      url: urlutama+"ajax",
      data: $('#formnambah').serializeArray(),
      cache: false,
      success: function(data){
        if (data == "true") {
          alert("Mahasiswa Berhasil Ditambahkan");
          $(location).attr('href',urlutama);
        }else if (data == "false"){
          alert("Data Mahasiswa Sudah Ada");
          $(location).attr('href',urltama');
        }
      },
      error: function() {
        alert("gagal");
      }
    });
  })
  $('#formcour').submit(function(e) {
      e.preventDefault();
  })
  $('input[id=coursv]').click(function() {
    alert("Penyimpanan!");
    $.ajax({
      type: "post",
      url: urlutama+"ajax",
      data: $('#formcour').serializeArray(),
      cache: false,
      success: function(data){
        if (data == "true") {
          alert("Terima Kasih Data Masuk");
          $(location).attr('href',urlutama+'login/2Lojw');
        }else if (data == "false"){
          alert("Jadwal anda sudah ada !");
          $(location).attr('href',urlutama+'login/2Lojw');
        }
      },
      error: function() {
        alert("gagal");
      }
    });
  })
})
