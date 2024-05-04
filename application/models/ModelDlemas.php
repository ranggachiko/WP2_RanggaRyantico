<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDlemas extends CI_Model 
{   
    public function svdata($data)
    {
        //untuk memasukan data baru ke table siswa di dtabse dlemas, datanya diambil dari $data
        $this->db->insert('siswa',$data);

        return $this->db->insert_id();
    }

    public function alldata()
    {
        return $this->db->get('siswa')->result_array();
    }
}