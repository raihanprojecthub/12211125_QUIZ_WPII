<?php
  class mahasiswa extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('model_mahasiswa');
  }
  function index(){
    $data['mahasiswa'] = $this->model_mahasiswa->get_product();
    $this->load->view('mahasiswa_view',$data);
  }
  function delete(){
    $nim = $this->uri->segment(3);
    $this->model_mahasiswa->delete($nim);
    redirect('mahasiswa');
  }
}