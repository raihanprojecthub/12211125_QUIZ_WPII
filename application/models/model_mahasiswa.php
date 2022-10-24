<?php
  class model_mahasiswa extends CI_Model{
  function get_product(){
    $result = $this->db->get('mahasiswa');
    return $result;
  }
  function delete($nim){
    $this->db->where('nim', $nim);
    $this->db->delete('mahasiswa');
  }

}