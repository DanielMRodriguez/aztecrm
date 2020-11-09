<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Campo_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->dbforge();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  public function guardarCampos($datos, $lead)
  {
    $campos = array();
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');
    $i = 0;
    foreach ($datos as $key => $value) {
      $campos[$i] = array(
        'id_lead' => $lead,
        'campo' => $key,
        'valor' => $value,
        'created_at' => $created_at,
        'updated_at' => $updated_at
      );
      $i += 1;
    }

    $this->db->insert_batch('datos', $campos);
  }

  // ------------------------------------------------------------------------

}

/* End of file Campo_model.php */
/* Location: ./application/models/Campo_model.php */