<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Lead_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Lead_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public $id_proyecto;
  public $status = 1;
  public $comentarios = '';
  public $created_at;
  public $updated_at;

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

  public function nuevoLead($proyecto)
  {

    $this->created_at = date('Y-m-d H:i:s');
    $this->updated_at = date('Y-m-d H:i:s');
    $this->id_proyecto = $proyecto;
    $this->db->insert('leads', $this);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }

  public function obtenerDatosLeads($leadId)
  {
    $this->db->select('campo, valor');
    $this->db->from('datos');
    $this->db->where('id_lead', $leadId);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function obtenerLeads($proyectoId)
  {

    $query = $this->db->get_where('leads', array('id_proyecto' => $proyectoId));
    $leads = $query->result_array();
    $i = 0;
    foreach ($leads as $value) {
      $campos = $this->obtenerDatosLeads($value['id']);
      $datos = array();
      foreach ($campos as $value) {
        $datos[$value['campo']] = $value['valor'];
      }
      $leads[$i]['datos'] = $datos;
      $i += 1;
    }
    return $leads;
  }

  // ------------------------------------------------------------------------

}

/* End of file Lead_model.php */
/* Location: ./application/models/Lead_model.php */