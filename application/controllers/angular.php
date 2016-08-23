<?php
    if (!defined('BASEPATH')) exit ('No direct script access allowed!');

    class Angular extends CI_Controller{
        function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load->view('angular');
        }

        public function data_angularnya(){
            $dt=$this->db->get('siswa')->result();
            $arr_data = array();
            $i=0;
            foreach($dt as $r){
                $arr_data[$i]['nis']=$r->nis;
                $arr_data[$i]['nama']=$r->nama;
                $arr_data[$i]['nilai']=$r->nilai;
                $arr_data[$i]['jk']=$r->jk;
                $i++;
            }
            echo json_encode($arr_data);
        }
    }