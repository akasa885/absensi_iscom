<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="coba.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <script type="text/javascript" src="<?=baseaset?>js/jquery.min.js"></script>
    <!-- <script type="text/javascript">
    function respn(x) {
      if(x.matches)
      {
        $('#side-off').removeClass('fas fa-angle-double-left');
        $('#side-off').toggleClass('fas fa-angle-double-right');
      }else{
        $('#side-off').removeClass('fas fa-angle-double-right');
        $('#side-off').toggleClass('fas fa-angle-double-left');
      }
    }
    var x = window.matchMedia("(max-width: 600px)");
    respn(x); // Call listener function at run time
    x.addListener(respn);
    </script> -->
    <title><?php echo $data['judul']; ?></title>
  </head>
