<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SmpController extends CI_Controller{

    public function index(){

        $this->load->view('smpViewLogin'); // Carrega a view de login
    }

    public function cadastro(){

        $this->load->controller('SmpCadastro'); // Chama o Controller resposável pelo cadastro
    }

    

}