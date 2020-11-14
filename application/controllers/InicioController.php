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
    $this->load->view('layout/header');
    $this->load->view('inicio/inicio');
    $this->load->view('layout/footer');
  }
}


/* End of file HomeController.php */
/* Location: ./application/controllers/HomeController.php */