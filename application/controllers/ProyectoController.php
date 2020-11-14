<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller ProyectoController
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

class ProyectoController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cliente_model');
  }

  public function index()
  {
    $data['clientes'] = $this->Cliente_model->obtenerClientes();
    $this->load->view('layout/header');
    $this->load->view('proyectos/inicio', $data);
    $this->load->view('layout/footer');
  }
}


/* End of file ProyectoController.php */
/* Location: ./application/controllers/ProyectoController.php */