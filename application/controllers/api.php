<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
    require APPPATH.'/libraries/REST_Controller.php';
 
    class Api extends REST_Controller{
        function __construct(){
            parent::__construct();
        }
        
        function index(){
            $this->load->view('angular');
        }

        function siswa_get(){
            
            $nilai = $this->get('nilai');
            $jk = $this->get('jk');
            if($nilai == "" || $jk == ""){
                $mahasiswa = $this->db->get('siswa')->result();
            }else{
                $this->db->where('nilai',$nilai)->where('jk',$jk);
                $mahasiswa = $this->db->get('siswa')->result();
            }
            $this->response($mahasiswa);
        }
    }