<?php
class Login extends CI_Controller {
  
  public function index() 
  {
    $this->load->view('login');
  }
  
  public function checkLog() 
  {
    $nom = $this->input->get('nom');
    $mdp = $this->input->get('mdp');

    $this->load->model('login_model');
    $user = $this->login_model->login($nom, $mdp);
    
    if ($user) {
      $this->session->set_userdata('user', $user);
      redirect('dashboard');
    } else {
      
      $data['error'] = 'Identifiants invalides.';
      $this->load->view('login', $data);
    }
  }

  public function inscri() 
  {

    $nom = $this->input->get('nom');
    $mdp = $this->input->get('mail');
    $mdp = $this->input->get('mdp');

    $this->load->model('login_model');
    $user = $this->login_model->login($nom, $mdp);

  }
  
  public function logout() {
    
    $this->session->unset_userdata('user');
    redirect('login');
  }
}
?>
