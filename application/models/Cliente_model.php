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


  public function obtenerCliente($clienteID)
  {
    $query = $this->db->get_where('clientes', array('id' => $clienteID));
    return $query->result_array();
    // return $this->db->error();
  }


  // public function obtenerClientes()
  // {
  //   $query = $this->db->get('clientes');
  //   return $query->result_array();
  // }

  public function agregarCliente($datosCliente)
  {
    $timestamp = date('Y-m-d H:i:s');
    $datosCliente['status'] = 1;
    $datosCliente['created_at'] = $datosCliente['updated_at'] = $timestamp;

    $rest = $this->db->insert('clientes', $datosCliente);
    return $rest;
  }

  // ------------------------------------------------------------------------

}

/* End of file Cliente_model.php */
/* Location: ./application/models/Cliente_model.php */