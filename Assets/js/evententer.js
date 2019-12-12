var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
if (event.keyCode === 13) {
  event.preventDefault();
  var y = document.getElementById("myInput").value;
  var l = y.length;
  var psword = "3fa2323jiu1RA"+y+"RA"+l+"2837dhsc891341";
  var url = "http://localhost/uji/proses.php?pw="+psword;
  window.location.href=url;
}
});
