<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class ProyectoController extends RestController
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('proyecto_model');
  }

  public function obtenerProyectos_get($idCliente)
  {
    $proyectos = $this->proyecto_model->obtenerProyectos($idCliente);
    $this->response($proyectos, 200);
  }
}


/* End of file ProyectoController.php */
/* Location: ./application/controllers/ProyectoController.php */