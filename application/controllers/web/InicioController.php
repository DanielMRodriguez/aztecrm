<?php
defined('BASEPATH') or exit('No direct script access allowed');


class InicioController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['ubicacion'] = 'home';
    $this->load->view('layout/header', $data);
    $this->load->view('inicio/inicio', $data);
    $this->load->view('layout/footer', $data);
  }
}


/* End of file HomeController.php */
/* Location: ./application/controllers/HomeController.php */