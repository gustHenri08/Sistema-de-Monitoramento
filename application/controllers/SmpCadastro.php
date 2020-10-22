<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SmpCadastro extends CI_Controller{

    public function index(){

        $this->load->view('smpViewCadastro'); //Carrega a view de cadastro

    }

    
}