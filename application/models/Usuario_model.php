<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Usuario_model
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

class Usuario_model extends CI_Model
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

  // ------------------------------------------------------------------------

  public function obtenerUsuario($correo)
  {
    $query = $this->db->get_where('usuarios', array('correo' => $correo));
    return $query->result_array();
  }
}

/* End of file Usuario_model.php */
/* Location: ./application/models/Usuario_model.php */