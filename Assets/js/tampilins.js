$(document).ready(function(){
  var loc = window.location.pathname;
  var trigger = $('#lanjut a'),
  container = $('#bungkus');

  trigger.on('click', function() {
    var $this = $(this)
    target = $this.data('target');
    if(target=='tambah'){
      $('#s1').removeClass('swipe-s');
      $('#s1').addClass('swipe');
      $('#s2').removeClass('swipe');
      $('#s2').addClass('swipe-s');
    }else if(target=='absen'){
      $('#s2').removeClass('swipe-s');
      $('#s2').addClass('swipe');
      $('#s1').removeClass('swipe');
      $('#s1').addClass('swipe-s');
    }else if(target=='course'){
      if($('#tabs').length){
        $('#s1').removeClass('swipe-s');
        $('#s1').addClass('swipe');
        $('#s3').removeClass('swipe');
        $('#s3').addClass('swipe-s');
        $('#m1').removeClass('active');
        $('#m2').addClass('active');
      }else{
        alert("Anda belum melakukan input!");
        location.reload();
      }
    }

    return false;
  })
})
