<?php
class Auth_model extends CI_Model{
    //This function will save a user record in database
    public function create($formArray){
        $this->db->insert('users', $formArray);
    }
}

?>