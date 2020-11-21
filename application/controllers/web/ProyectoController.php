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
    $this->load->model('Proyecto_model');
  }

  public function index()
  {
    $data['clientes'] = $this->Cliente_model->obtenerClientes();
    $data['ubicacion'] = "proyectos";
    $this->load->view('layout/header', $data);
    $this->load->view('proyectos/inicio', $data);
    $this->load->view('layout/footer', $data);
  }



  public function nuevo($clienteId)
  {
    $data['cliente'] = $this->Cliente_model->obtenerCliente($clienteId);
    $data['ubicacion'] = "proyectos";
    $data['clienteId'] = $clienteId;
    $this->load->view('layout/header', $data);
    $this->load->view('proyectos/nuevo', $data);
    $this->load->view('layout/footer', $data);
  }

  public function guardar()
  {
    $this->load->library('form_validation');


    $this->form_validation->set_rules('nombre', 'nombre', 'required|trim');
    $this->form_validation->set_rules('clave', 'clave', 'required|trim|min_length[6]');
    $this->form_validation->set_rules('cliente_id', 'cliente_id', 'required');

    if ($this->form_validation->run() == FALSE) {
      $formErrores = array('nombre' => form_error('nombre'), 'clave' => form_error('clave'));
      $formDatos =      array('nombre' => set_value('nombre'), 'clave' => set_value('clave'));
      $this->session->set_flashdata('formErrores', $formErrores);
      $this->session->set_flashdata('formDatos', $formDatos);
      $clienteId = $this->input->post('cliente_id');
      redirect("proyectos/nuevo/$clienteId");
    } else {

      $rest =  $this->Proyecto_model->crearProyecto($this->input->post());
      if ($rest) {
        $this->session->set_flashdata('success', "Se creo correctamente el proyecto, en la sección de proyectos podrás consultar la clave para poner en los formularios");
        redirect('clientes');
      } else {
        $this->session->set_flashdata('error', "Hubo un error al tratar de guardar el nuevo proyecto, por favor intentalo de nuevo");
        redirect("proyectos/nuevo/$clienteId");
      }
    }
  }
}


/* End of file ProyectoController.php */
/* Location: ./application/controllers/ProyectoController.php */