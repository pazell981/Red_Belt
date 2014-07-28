<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
	 function add_user($user_info){
         $query = "INSERT INTO users (first_name, last_name, user_name, email, password, dateofbirth) VALUES (?,?,?,?,?,?)";
         $values = array($user_info['first_name'], $user_info['last_name'], $user_info['user_name'], $user_info['email'], $user_info['password'], date("Y-m-d", strtotime($user_info['dateofbirth']))); 
         return $this->db->query($query, $values);
     }
     function get_user_by_email($email){
		return $this->db->query('SELECT * FROM users WHERE email = ?', array($email))->row_array();
	}
}

/* End of file  user.php */
/* Location: ./application/models/user.php */