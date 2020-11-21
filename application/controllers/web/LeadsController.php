<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller LeadsController
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class LeadsController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cliente_model');
    $this->load->model('Proyecto_model');
  }

  public function index()
  {
    $data['clientes'] = $this->Cliente_model->obtenerClientes();
    $data['ubicacion'] = "leads";
    $this->load->view('layout/header', $data);
    $this->load->view('leads/inicio', $data);
    $this->load->view('layout/footer', $data);
  }
}


/* End of file LeadsController.php */
/* Location: ./application/controllers/LeadsController.php */