<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class LeadController extends RestController
{
  public $respuesta = array(
    'error' => false,
    'mensaje' => ''
  );

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Lead_model');
    $this->load->model('Proyecto_model');
    $this->load->model('Campo_model');
  }

  public function index()
  {
    // 
  }

  public function newLead_post()
  {
    $newLead = $this->input->post();

    if (empty($newLead)) {
      $this->response(['error' => true, 'mensaje' => 'Debes enviar los datos de contacto'], 400);
    }

    $this->validarDatosLead($newLead);

    $proyecto = $newLead['CDP'];
    unset($newLead['CDP']);
    $datos = $newLead;

    $proyectoId = $this->Proyecto_model->obtenerId($proyecto);
    $idLead =  $this->Lead_model->nuevoLead($proyectoId);
    $this->Campo_model->guardarCampos($datos, $idLead);

    $this->response(
      [
        'error' => false,
        'mensaje' => 'Lead agregado',
        'datos' => array('id_lead' => $idLead)
      ],
      200
    );
  }

  public function obtenerLeads_get($clave)
  {

    $result =  $this->validarProyecto($clave);
    if (empty($result)) {
      $this->respuesta['error'] =  true;
      $this->respuesta['mensaje'] = 'No exite el proyecto';
      $this->response($this->respuesta, 400);
      die;
    }

    $proyectoId = $result[0]['id'];
    $leads = $this->Lead_model->obtenerLeads($proyectoId);

    $this->response($leads, 200);
  }

  private function validarDatosLead($lead)
  {
    if (!$this->validarMetaCampos($lead)) {
      $this->respuesta['error'] =  true;
      $this->respuesta['mensaje'] = 'Debes enviar los meta datos';
      $this->response($this->respuesta, 400);
      die;
    }

    if (empty($this->validarProyecto($lead['CDP']))) {
      $this->respuesta['error'] =  true;
      $this->respuesta['mensaje'] = 'No exite el proyecto';
      $this->response($this->respuesta, 400);
      die;
    }
  }

  private function validarMetaCampos($lead)
  {
    if (array_key_exists('CDP', $lead) and $lead['CDP'] !== '') {
      return true;
    } else {
      return false;
    }
  }

  private function validarProyecto($proyecto)
  {
    $result = $this->Proyecto_model->obtenerProyecto($proyecto);
    return $result;
  }
}


/* End of file LeadController.php */
/* Location: ./application/controllers/LeadController.php */