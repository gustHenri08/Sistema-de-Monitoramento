<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SmpHome extends CI_Controller{

    public function index(){

        $this->load->view('smpViewAgente'); //Falta Criar a view do agente

    }

    public function admin(){
        $this->load->view('smpViewAdmin'); //Falta Criar a view do admin
    }

    
}