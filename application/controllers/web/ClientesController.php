<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller ClientesController
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

class ClientesController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cliente_model');
  }

  public function index()
  {

    $data['clientes'] = $this->cliente_model->obtenerClientes();
    $data['ubicacion'] = 'clientes';
    $this->load->view('layout/header', $data);
    $this->load->view('clientes/inicio', $data);
    $this->load->view('layout/footer', $data);
  }

  public function nuevo()
  {
    $data['ubicacion'] = 'clientes';
    $this->load->view('layout/header', $data);
    $this->load->view('clientes/nuevo', $data);
    $this->load->view('layout/footer', $data);
  }

  public function guardar()
  {


    $this->load->library('form_validation');


    $this->form_validation->set_rules('nombre', 'nombre', 'required|trim');
    $this->form_validation->set_rules('clave', 'clave', 'required|trim|min_length[6]');

    if ($this->form_validation->run() == FALSE) {
      $formErrores = array('nombre' => form_error('nombre'), 'clave' => form_error('clave'));
      $formDatos =      array('nombre' => set_value('nombre'), 'clave' => set_value('clave'));
      $this->session->set_flashdata('formErrores', $formErrores);
      $this->session->set_flashdata('formDatos', $formDatos);
      redirect('clientes/nuevo');
    } else {

      $rest =  $this->cliente_model->agregarCliente($this->input->post());
      if ($rest) {
        redirect('clientes');
      } else {
        redirect('clientes/nuevo');
      }
    }
  }
}


/* End of file ClientesController.php */
/* Location: ./application/controllers/ClientesController.php */