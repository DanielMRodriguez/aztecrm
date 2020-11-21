<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Proyecto_model
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

class Proyecto_model extends CI_Model
{
  public $nombre;
  public $clave;
  public $status = 1;
  public $descripcion;
  public $cliente_id;
  public $created_at;
  public $updated_at;
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

  public function obtenerProyecto($clave)
  {
    $query = $this->db->get_where('proyectos', array('clave' => $clave));
    return $query->result_array();
  }

  public function obtenerId($clave)
  {
    $query = $this->db->select('id')->get_where('proyectos', array('clave' => $clave));
    $id = $query->result_array();

    return $id[0]['id'];
  }

  public function obtenerProyectos($idCliente)
  {
    $query = $this->db->get_where('proyectos', array('cliente_id' => $idCliente));
    return $query->result_array();
  }

  public function crearProyecto($datos)
  {
    $datos['status'] = 1;
    $datos['created_at'] = $datos['updated_at'] = date('Y-m-d H:i:s');

    if ($this->db->insert('proyectos', $datos)) {
      $query = $this->db->query('SELECT LAST_INSERT_ID()');
      $row = $query->row_array();
      $LastIdInserted = $row['LAST_INSERT_ID()'];
      return $LastIdInserted;
    } else {
      return $this->db->error();
    }
  }

  // ------------------------------------------------------------------------

}

/* End of file Proyecto_model.php */
/* Location: ./application/models/Proyecto_model.php */