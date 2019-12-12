<?php
class mahasiswa
{
  public function getall()
  {
    include 'config.php';
    $query = "select a.id_absensi,a.npm,m.nama_mhs,a.tgl_jadwal,a.status_absensi from absensi a join mahasiswa m on (a.npm=m.npm) order by a.npm ASC";
    $result = mysqli_query($cd,$query);
    return $result;
  }
}

 ?>
