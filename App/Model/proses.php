<?php
class proses
{
  public function logot()
  {
    session_destroy();
    header('Location:'.baseurl);
  }

  public function absen($npm)
  {
    include 'config.php';
    for ($i=0; $i < count($npm); $i++) {
      $sql = "update absensi set tgl_jadwal = CURRENT_TIMESTAMP, status_absensi='Hadir' where npm = '$npm[$i]'";
      mysqli_query($cd,$sql);
    }
    return "sukses";
  }

public function logindc()
{
  // code...
}

public function login()
  {
    include 'config.php';
    $re = "halo";
    $cek = "Wednesday";
    if(!empty($_REQUEST['usern'])&&!empty($_REQUEST['ps'])) {
      $user = $_REQUEST['usern'];
      $pss = $_REQUEST['ps'];
      $sql = "select*from user where username='$user' and pass='$pss'";
      $result=mysqli_query($cd,$sql);
      if(!$result){
        die("error!!".mysqli_error());
      }else{
        $skrg = date('Y-m-d');
        $skrg2 = strtotime($skrg);
        $hari = date('l',$skrg2);
        if($cek === $hari){
          $data=mysqli_num_rows($result);
          if($data==1)
          {
            $query = "select * from absensi where substr(tgl_jadwal,1,10) like substr(current_timestamp,1,10)";
            $hasil = mysqli_query($cd,$query);
            if(mysqli_num_rows($hasil)>=1)
            {
              $re = "oke";
            }else
            {
                $queru = "update absensi set tgl_jadwal = NULL,status_absensi = 'Tidak Hadir' where status_absensi = 'Hadir'";
                $hasil = mysqli_query($cd,$queru);
                if(!$hasil)
                {
                  die("error!!".mysqli_error());
                }
                $re = "oke";
            }
          }else
          {
            $re = "salah";
          }
        }else
        {
        	$re = "deny";
        }
      }
    }
    return $re;
  }

  public function entry()
  {
    include 'config.php';
    $query = "select count(status_absensi) from absensi where status_absensi = 'Hadir'";
    $out = mysqli_query($cd,$query);
    if(!$out){
      die("error!!".mysqli_error());
    }else{
      $import = mysqli_fetch_array($out);
      $total = $import[0];
      // $date = date("Y-m-d");
      $harinow = date("Y-m-d");
    }
    if(isset($harinow))
    {
      $sql = "select * from jadwal where tgl_jadwal = '$harinow'";
      $result = mysqli_query($cd,$sql);
      $nama = $_REQUEST['pengajar'];
      $_SESSION['nama'] = $nama;
      $materi=$_REQUEST['materi'];
      $modul= $_REQUEST['modul'];
      $modul = $modul;
      $materi = $materi."(".$modul.")";
      if(!$result){
        die("error!!".mysqli_error());
      }
      if(mysqli_num_rows($result)==0)
      {
        $sql = "insert into jadwal (tgl_jadwal,nama_pengajar,jumlah_peserta,materi) values ('$harinow','$nama',$total,'$materi')";
        $hasil = mysqli_query($cd,$sql);
        if(!$hasil){
          die("error!!".mysqli_error());
        }
        return "Success bro!";
      }else{
        return "Already Inserted!";
      }
    }
  }

  public function add()
  {
    include 'config.php';
    $nama = $_REQUEST['mhs'];
    $npm=$_REQUEST['npm'];
    $pas = $_REQUEST['pas'];
    $divisi= $_REQUEST['divisi'];
    $sql = "select * from mahasiswa where npm = '$npm'";
    $result = mysqli_query($cd,$sql);
    if(!$result){
      die("error!!".mysqli_error());
    }else{
      if(mysqli_num_rows($result)==0){
        $encryp=password_hash($pas,PASSWORD_BCRYPT);
        $sql = "insert into mahasiswa (npm,nama_mhs,pass_mhs,Divisi) values ('$npm','$nama','".md5($encryp)."','$divisi')";
        $hasil = mysqli_query($cd,$sql);
        if(!$hasil){
          die("error!!".mysqli_error());
        }
        $queru = "insert into absensi (npm,akses) values ('$npm','Last')";
        $masuk = mysqli_query($cd,$queru);
        if(!$masuk){
          die("error!!".mysqli_error());
        }
        $queru2 = "select id_absensi from absensi where npm='$npm'";
        $masuk2 = mysqli_query($cd,$queru2);
        if(!$masuk2){
          die("error!!".mysqli_error());
        }else{
          $result = mysqli_fetch_array($masuk2);
          $id=$result[0];
          $id=$id-1;
          $queru3 = "update absensi set akses=NULL where id_absensi='$id'";
          $masuk3 = mysqli_query($cd,$queru3);
          if(!$masuk3){
            die("error!!".mysqli_error());
          }
        }
        return $nama;
      }else{
        return "ada";
      }
    }
  }

  public function Rekap()
  {
    $dskrg="";
    include 'config.php';
    $query1 = "select max(tanggal) from rekapi";
    $result1 = mysqli_query($cd,$query1);
    if(!$result1){
      die("error!!".mysqli_error());
    }else{
      $data2 = mysqli_fetch_array($result1);
      $tgl = $data2[0];
      $dskrg = date('Y-m-d');
      if($tgl == $dskrg){
        $call = "select id_rekp from rekapi where tanggal = '$dskrg'";
        $calr = mysqli_query($cd,$call);
        while ($cald = mysqli_fetch_array($calr)){
          $qdel = "delete from rekapi where id_rekp = '$cald[0]'";
          mysqli_query($cd,$qdel);
        }
      }
    }
    $count=0;
    $query0 = "select max(rekap_no) from rekapi";
    $result0 = mysqli_query($cd,$query0);
      if(mysqli_num_rows($result0)>=1){
        $data0 = mysqli_fetch_array($result0);
        $count = $data0[0] + 1;
      }else{
        $count = 1;
      }
    $query2 = "select npm from absensi where status_absensi like 'Hadir'";
    $result2 = mysqli_query($cd,$query2);
    if(!$result2){
      die("error!!".mysqli_error());
    }
    while($data1 = mysqli_fetch_array($result2)){
        $query3 = "insert into rekapi (rekap_no,tanggal,npm) values($count,'$dskrg','$data1[0]')";
        $result3 = mysqli_query($cd,$query3);
        if(!$result3){
          die("error!!".mysqli_error());
        }
    }
  }
}
?>
