<?php
	class Admin_model extends CI_Model{
	
		public function __construct(){
			parent::__construct();
		}

		public function login($username, $password){
			$query = $this->db->query("SELECT * FROM admins WHERE username = '".$username."' AND password = '".$password."'");
			$ok = false;
			$session_data = [];
			foreach($query->result() as $row){
				$session_data = array(
					'username' => $row->username,
					'name' => $row->name,
					'dp' => $row->dp,
					'admin' => true
				);
				$ok = true;
			}
			if($ok){
				return $session_data;
			}else{
				return array("Error" => "Invalid username or password", 'admin' => false);
			}
		}

		public function getUsers(){			
			return $this->db->query('SELECT * FROM users')->result();
		}

		public function getScrapbooks(){
			$scrapbooks = [];
			$query = $this->db->query('SELECT * FROM scrapbooks');			
			foreach($query->result() as $row){
				if($row->privacy == 'public'){
					$scrapbooks[] = array(
						'scrapbook_id' => $row->scrapbook_id,
						'first_page' => $row->first_page,
						'username' => $row->username,
						'name' => $row->name,
						'view_counter' => $row->view_counter,
						'likes' => $this->getNumberOfLikes($row->scrapbook_id),
						'blocked' => $row->blocked,
						'ep' => $this->checkEP($row->scrapbook_id)
					);					
				}
			}
			return $scrapbooks;
		}

		public function checkEP($scrapbook_id){
			return $this->db->query('SELECT * FROM editors_pick WHERE scrapbook_id = "'.$scrapbook_id.'"')->num_rows();
		}

		public function getAssets(){			
			return $this->db->query('SELECT * FROM assets')->result();
		}

		public function getReports(){
			return $this->db->query('SELECT * FROM reports')->result();	
		}

		public function getEP(){
			$ep = [];
			foreach($this->db->query('SELECT * FROM editors_pick')->result() as $x){
				foreach($this->db->query('SELECT * FROM scrapbooks WHERE scrapbook_id = "'.$x->scrapbook_id.'"')->result() as $y){
					$ep[] = array(
						'scrapbook_id' => $y->scrapbook_id,
						'first_page' => $y->first_page,
						'username' => $y->username,
						'name' => $y->name,						
						'blocked' => $y->blocked,
						'view_counter' => $y->view_counter,
						'likes' => $this->getNumberOfLikes($y->scrapbook_id),						
					);			
				}
			}
			return $ep;
		}

		public function getNumberOfLikes($scrapbook_id){
			return $this->db->query('SELECT * FROM likes_scrapbooks WHERE scrapbook_id = "'.$scrapbook_id.'"')->num_rows();
		}

		public function blockUser($username){
			$this->db->query('UPDATE users SET blocked = 1 WHERE username = "'.$username.'"');
		}

		public function unblockUser($username){
			$this->db->query('UPDATE users SET blocked = 0 WHERE username = "'.$username.'"');
		}

		public function blockScrapbook($scrapbook_id){
			$this->db->query('UPDATE scrapbooks SET blocked = 1 WHERE scrapbook_id = "'.$scrapbook_id.'"');
		}

		public function unblockScrapbook($scrapbook_id){
			$this->db->query('UPDATE scrapbooks SET blocked = 0 WHERE scrapbook_id = "'.$scrapbook_id.'"');
		}

		public function blockAsset($asset_id){
			$this->db->query('UPDATE assets SET blocked = 1 WHERE asset_id = "'.$asset_id.'"');
		}

		public function unblockAsset($asset_id){
			$this->db->query('UPDATE assets SET blocked = 0 WHERE asset_id = "'.$asset_id.'"');
		}

		public function addToEP($scrapbook_id){
			$this->db->query('INSERT INTO editors_pick (scrapbook_id) VALUES ("'.$scrapbook_id.'")');
		}

		public function removeFromEP($scrapbook_id){
			$this->db->query('DELETE FROM editors_pick WHERE scrapbook_id = "'.$scrapbook_id.'"');
		}

		public function deleteReport($report_id){
			$this->db->query('DELETE FROM reports WHERE report_id = "'.$report_id.'"');	
		}

		public function addAdmin($username, $name, $password){
			$this->db->query("INSERT INTO admins (username, name, password, dp) VALUES ('".$username."', '".$name."', '".$password."', 'default.png')");
		}

		public function editAdmin($username, $name, $newpass, $password){
			$query = $this->db->query("SELECT * FROM admins WHERE username = '".$username."' AND password = '".$password."'");
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
				$this->db->query("UPDATE admins SET name = '".$name."', password = '".$newpass."' WHERE username = '".$username."'");
				return array(
					'username' => $username,
					'name' => $name,
					'dp' => $dp,
					'admin' => true
				);
			}	
		}

		public function changeDP($username, $dp){
			$this->db->query("UPDATE users SET dp = '".$dp."' WHERE username = '".$username."'");
			return array('dp' => $dp);
		}


	}

?>