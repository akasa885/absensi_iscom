<?php
class home extends controller
{
  // function __construct(argument)
  // {
  //   // code...
  // }

  public function index()
  {
      session_start();
      $data['judul'] = 'Home';
      $this->view('templates/head',$data,'dpanel');
      $this->view('dashboard/index','','dpanel');
      $this->view('templates/footer','','dpanel');
  }
}

 ?>
