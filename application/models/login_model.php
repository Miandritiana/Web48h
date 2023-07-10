<?php
class Login_model extends CI_Model {
  
  public function login($nom, $mdp) {
   
    $sql = "SELECT * FROM `user` WHERE nom = '%s' and mdp = '%s' ";
    $sql = sprintf($sql,$this->db->escape($nom), $this->db->escape($mdp));

    $query = $this->db->query($sql);
    
    if ($query->num_rows() == 1) {
      
      return $query->row_array();
      
    } else {
      return false;
    }
  }
}
?>