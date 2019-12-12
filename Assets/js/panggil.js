$(document).ready(function(){
  var loc = window.location.pathname;
  var trigger = $('#lanjut a'),
  container = $('#bungkus');

  trigger.on('click', function() {
    var $this = $(this)
    target = $this.data('target');
    console.log(loc);
    console.log(target);

    container.load("App/View/home/"+target + '.php');

    return false;
  })
})
