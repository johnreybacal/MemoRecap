<?php
	class User_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
		}

		public function Signup($username, $name, $password){
			return $this->db->simple_query("INSERT INTO users (username, name, password) VALUES ('".$username."', '".$name."', '".$password."')");
		}

		public function Login($username, $password){
			$query = $this->db->query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");
			$ok = false;
			$session_data = [];
			foreach($query->result() as $row){
				$session_data = array(
					'username' => $row->username,
					'name' => $row->name,
					'logged_in' => true
				);
				$ok = true;
			}
			if($ok){
				return $session_data;
			}else{
				return "Invalid username or password";
			}
		}
		
	}
?>