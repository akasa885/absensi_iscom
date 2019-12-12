<?php
class login extends controller
{
  public function index($error='')
  {
    $acc="";
    session_start();
    $data['judul']='Login Absensi';
    $data['error'] = $error;
    //---------
    $this->view('templates/log_head',$data);
    //---------
    if($data['error']=='2Lojw'){
      $this->model('proses')->logot();
    }
    //---------
    $this->view('login/indexlogin');
    //---------
    $this->view('templates/log_foot');
  }
}
