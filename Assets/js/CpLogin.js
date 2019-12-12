// switch (document.location.hostname)
// {
//         case 'absensi.iscom.tech':
//                           var rootFolder = '/devbuild/'; break;
//         case 'localhost' :
//                           var rootFolder = '/absensi_fix/'; break;
//         default :  // set whatever you want
// }
var chg = 0;
function laj() {
	chg = 1;
	window.onbeforeunload = function(event)
    {
        return confirm("Confirm refresh");
    };
    $('#view_changer').load("../App/View/templates/ACS001.php");
}
function bgn() {
	window.onbeforeunload = function(event)
    {
        return confirm("Confirm refresh");
    };
	chg = 2;
    $('#view_changer').load("../App/View/templates/belum.html");
}
function gos() {
    window.location.replace(urlutama);
}
function god() {
    window.location.replace(urlutama+"dpanel");
}
function progress() {

}
$(document).ready(function (){
  // window.onload = function() {
  //   $(".se-pre-con").fadeOut(500);
  // };
  $(window).on('load',function() {
  		// Animate loader off screen
  		//$(".se-pre-con").fadeOut(500);
  	});
  var loc = window.location.pathname;
  $('#adminac').submit(function(e) {
      e.preventDefault();
  });
  $('button[id=logins]').click(function() {
    var action = $('#logins').val();
    var $form = $('#adminac');
    data = $form.serialize() +'& login='+ action;
    if (action == 'learn') {
      var jcall = $.ajax({
        type: "post",
        url: urlutama+"akses",
        data: data,
        cache: false,
        success: function(data) {
          if(data == "deny")
          {
            laj();
          }else if (data == "cocok") {
            alert("Hello admin!");
            gos();
          }else if (data == "wrong") {
            $('#usrn').val('');
            $('#psn').val('');
            alert("Password atau Username salah!");
          }
        },
        error: function() {
          alert("erorr");
        }
      });
    }else if (action == 'datacenter') {
      $.ajax({
        type: "post",
        url: urlutama+"akses",
        data: data,
        cache: false,
        success: function(data){
          if (data == "underconstruct") {
            bgn();
          }
        },
        error: function() {
          alert("error");
        }
      });
    }
  });
});
$(document).on('click', '#DC', function() {
	if(chg == 1)
	{
		location.reload();
	}
  $('#learn').removeClass('active');
  $('#DC').addClass('active');
  $('#title_change').text("Login Data Center");
  $('#logins').val('datacenter');
  $('#usrn').val('');
  $('#psn').val('');
});
$(document).on('click', '#learn', function() {
	if(chg == 2)
	{
		location.reload();
	}
  $('#DC').removeClass('active');
  $('#learn').addClass('active');
  $('#title_change').text("Login Pembelajaran ISCOM");
  $('#logins').val('learn');
  $('#usrn').val('');
  $('#psn').val('');
});
