<?php 

class Users_model extends CI_Model {

    function __construct()
    {
        $this->load->database();
    }

    public function checkUser($email,$password)
    {
        $query = $this->db->query("SELECT * FROM users WHERE email='$email' AND password = MD5('$password') LIMIT 1");

        return $query;
    }
}