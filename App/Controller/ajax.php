<?php
class ajax extends controller
{

  public function index()
  {
     if(!empty($_POST['kvcArray'])){
       $absen = json_decode($_POST['kvcArray']);
       $cek = $this->model('proses')->absen($absen);
       if($cek === "sukses"){
         return true;
       }
     }elseif (!empty($_REQUEST['mhs'])) {
       $temp = $_REQUEST['mhs'];
       $cek = $this->model('proses')->add();
       if($cek === $temp){
         echo "true";;
       }else if($cek === "ada"){
         echo "false";
       }
     }elseif (!empty($_REQUEST['pengajar'])) {
       // echo "hello";
       $cek = $this->model('proses')->entry();
       if($cek === "Success bro!"){
         $this->model('proses')->Rekap();
         echo "true";
       }else if($cek === "Already Inserted!"){
         $this->model('proses')->Rekap();
         echo "false";
       }
     }
  }

}

?>
