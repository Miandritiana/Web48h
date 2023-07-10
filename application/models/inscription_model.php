<?php
class inscription_model extends CI_Model {
  
  public function login($nom, $email , $mdp) {
   
    $sql = "INSERT INTO `user`(`nom`, `email`, `mdp`) VALUES ('%s','%s','%s')";
    $sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($email) ,$this->db->escape($mdp));

    $query = $this->db->query($sql);
    
    redirect('Login');
  }
}
?>