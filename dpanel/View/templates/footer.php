<script type="text/javascript">
var classname;
$('#side-off').toggleClass('fas fa-angle-double-left');
function getnilai() {
  $('#side-col-1').css({"transition":""});
  $('#side-sld').css({"transition":""});
  classname = $('#side-off').attr('class');
}
function phone() {

}
function laptop() {
  $(document).ready(function() {
      $(document).on('click','.fa-angle-double-left', function() {
        getnilai();
        if(classname == 'fas fa-angle-double-left'){
        $(this).removeClass('fas fa-angle-double-left');
        $(this).addClass('fas fa-angle-double-right');
        $('#side-sld').addClass('animate-side');
        $('#side-col-1').addClass('animate-col');
        $('#side-col-2').css({"width":"97.5%","transition": "all 0.3s 0.3s ease-in"});
        }
      });
      $(document).on('click', '.fa-angle-double-right', function() {
        getnilai();
        if(classname == 'fas fa-angle-double-right'){
        $(this).removeClass('fas fa-angle-double-right');
        $(this).toggleClass('fas fa-angle-double-left');
        $('#side-col-2').css({"width":"","transition": "all 0.3s ease-in"});
        $('#side-col-1').css({"transition":" 0.3s ease-in"});
        $('#side-sld').css({"transition":"0.3s 0.3s ease-in"});
        $('#side-sld').removeClass('animate-side');
        $('#side-col-1').removeClass('animate-col');
      }
      });
    })
}
</script>
</html>
