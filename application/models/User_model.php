<?php
	class User_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
		}

		public function Signup($username, $name, $password){
			$query = $this->db->query("SELECT username FROM users WHERE username = '".$username."'");
			foreach($query->result() as $row){
				return array("Error" => "Username already taken");
			}
			$this->db->query("INSERT INTO users (username, name, password, dp) VALUES ('".$username."', '".$name."', '".$password."', 'default.png')");
			return array(
				'username' => $username,
				'name' => $name,
				'dp' => 'default.png',
				'logged_in' => true
			);
		}

		public function Login($username, $password){
			$query = $this->db->query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");
			$ok = false;
			$session_data = [];
			foreach($query->result() as $row){
				$session_data = array(
					'username' => $row->username,
					'name' => $row->name,
					'dp' => $row->dp,
					'logged_in' => true
				);
				$ok = true;
			}
			if($ok){
				return $session_data;
			}else{
				return array("Error" => "Invalid username or password");
			}
		}

		public function changeDP($username, $dp){
			$this->db->query("UPDATE users SET dp = '".$dp."' WHERE username = '".$username."'");
			return array('dp' => $dp);
		}

		public function updateAccount($username, $name, $newpass, $password){
			$query = $this->db->query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");
			$ok = false;
			$dp = '';
			foreach($query->result() as $row){
				if(!isset($name)){
					$name = $row->name;
				}
				if(!isset($newpass)){
					$newpass = $row->password;	
				}
				$dp = $row->dp;				
				$ok = true;
			}
			if(!$ok){
				return array("Error" => "Incorrect password");
			}else{
				$this->db->query("UPDATE users SET name = '".$name."', password = '".$newpass."' WHERE username = '".$username."'");
				return array(
					'username' => $username,
					'name' => $name,
					'dp' => $dp,
					'logged_in' => true
				);
			}			
		}

		public function getProfile($username){
			$query = $this->db->query('SELECT * FROM users WHERE username = "'.$username.'"');
			foreach($query->result() as $row){
				return array(
					'username' => $row->username,
					'name' => $row->name,
					'dp' => $row->dp,
					'blocked' => $row->blocked
				);
			}
		}

		public function likeScrapbook($username, $scrapbook_id){
			$this->db->query('INSERT INTO likes_scrapbooks (username, scrapbook_id) VALUES ("'.$username.'", "'.$scrapbook_id.'")');
		}

		public function unlikeScrapbook($username, $scrapbook_id){
			$this->db->query('DELETE FROM likes_scrapbooks WHERE username = "'.$username.'" AND scrapbook_id = "'.$scrapbook_id.'"');
		}

		public function report($scrapbook_id, $reporter, $reason, $type){
			$this->db->query('INSERT INTO reports (type, reporter, target, reason) VALUES ("'.$type.'", "'.$reporter.'", "'.$scrapbook_id.'", "'.$reason.'")');
		}
		
	}
?>