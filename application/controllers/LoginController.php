<?php
defined('BASEPATH') or exit('No direct script access allowed');


class LoginController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {

    $this->load->library('form_validation');


    $this->form_validation->set_rules('correo', 'correo', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('login.view.php');
    } else {
      $this->load->library('session');
      $correo = $this->input->post('correo');
      $password = $this->input->post('password');
      $this->load->model('Usuario_model');
      $usuario = $this->Usuario_model->obtenerUsuario($correo);
      if (!$usuario) {
        redirect('login');
      }

      if (password_verify($password, $usuario[0]['password'])) {
        $datosUsuario = array(
          'nombre' => $usuario[0]['nombre'],
          'id' => $usuario[0]['id'],
          'role' => $usuario[0]['role'],
          'correo' => $usuario[0]['correo']
        );
        $this->session->set_userdata($datosUsuario);
        redirect('home');
      } else {
        redirect('login');
      }
    }
  }
}


/* End of file LoginController.php */
/* Location: ./application/controllers/LoginController.php */