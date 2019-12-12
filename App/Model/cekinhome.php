<?php

class cekinhome
{
  public function cek()
  {
    include 'config.php';
    if(isset($_GET['error']) and isset($_GET['in'])){
      echo "<script type=\"text/javascript\">
      alert(\"data mahasiswa telah ada!\");
      </script>";
    }
    if (isset($_GET['error']) and isset($_GET['cp'])) {
      echo "<script type=\"text/javascript\">
      alert(\"password yang anda masukkan salah\");
      </script>";
    }
    if (isset($_GET['success']) and isset($_GET['in'])) {
      $query = "select count(status_absensi) from absensi where status_absensi = 'Hadir'";
      $result = mysqli_query($cd,$query);
      if(!$result){
        die("error!!".mysqli_error());
      }else{
        $import = mysqli_fetch_array($result);
        $total = $import[0];
        echo "<script type=\"text/javascript\">
        alert(\"Terima Kasih!".$_SESSION['nama']." atas pelajarannya.Mahasiswa yang mengikuti kelas :".$total." orang\");
        </script>";
        session_destroy();
        echo "<script>
        var url = \"http://localhost/uji/\";
        window.location.href=url
        </script>";
      }
    }
  }
}
