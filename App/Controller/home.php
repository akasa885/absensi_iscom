<?php
 class home extends controller
 {
   public function index()
   {
     session_start();
     $data['judul']='Dashboard';
     $data['result']=$this->model('mahasiswa')->getall();
     $data['username']=$this->model('usercek')->get_user();
     if(!empty($_POST['kvcArray'])){
       $myarray = json_decode(stripslashes($_POST['kvcArray']));
       foreach ($myarray as $np){
        $this->model('proses')->absen($np);
       }
     }
     if($data['username']==="guest"){
       header('Location:'.loginfirst);
     }else{
       //---------
       $this->view('templates/header',$data);
       //---------
       //---------
       $this->view('home/Dasboard',$data);
       //---------
       $this->view('templates/footer');
     }
   }
 }
