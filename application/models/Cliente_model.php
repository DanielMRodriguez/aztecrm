<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Cliente_model
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

class Cliente_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
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

  public function obtenerClientes()
  {
    $query = $this->db->get('clientes');
    return $query->result_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file Cliente_model.php */
/* Location: ./application/models/Cliente_model.php */