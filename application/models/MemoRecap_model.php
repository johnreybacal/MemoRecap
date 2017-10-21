<?php
	class MemoRecap_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
		}

		//methods that are not used to load or save a scrapbook
		//methods that are more on 'views'
		public function displayScrapbooks($username){					
			$scrapbooks = [];
			$query = $this->db->query("SELECT * FROM scrapbooks WHERE username = '".$username."' order by scrapbook_id ASC");
			foreach($query->result() as $row){
				$scrapbooks[] = array(
					'scrapbook_id' => $row->scrapbook_id,
					'first_page' => $row->first_page,			
					'name' => $row->name,
					'like' => $this->checkLike($row->scrapbook_id),
					'view_counter' => $row->view_counter,
					'likes' => $this->getNumberOfLikes($row->scrapbook_id),
					'description' => $row->description,
					'privacy' => $row->privacy
				);
			}
			return $scrapbooks;
		}

		public function getLatestWorks(){			
			$lw = [];
			$query = $this->db->query("SELECT * FROM scrapbooks WHERE blocked = 0 privacy = 'public' order by scrapbook_id DESC");
			foreach($query->result() as $row){
				if($row->blocked == 0){
					$lw[] = array(
						'scrapbook_id' => $row->scrapbook_id,
						'first_page' => $row->first_page,
						'username' => $row->username,
						'name' => $row->name,
						'like' => $this->checkLike($row->scrapbook_id),
						'view_counter' => $row->view_counter,
						'likes' => $this->getNumberOfLikes($row->scrapbook_id),
						'description' => $row->description
					);					
				}
			}
			return $lw;
		}

		public function getFeaturedWorks(){
			$fw = [];			
			$query = $this->db->query("SELECT scrapbook_id, COUNT(scrapbook_id) as frequency FROM likes_scrapbooks GROUP BY scrapbook_id ORDER BY frequency DESC");
			foreach($query->result() as $x){
				$query = $this->db->query('SELECT * FROM scrapbooks WHERE scrapbook_id = "'.$x->scrapbook_id.'" AND privacy = "public" AND blocked = 0');
				foreach($query->result() as $y){
					if($y->blocked == 0){
						$fw[] = array(
							'scrapbook_id' => $y->scrapbook_id,
							'first_page' => $y->first_page,
							'username' => $y->username,
							'name' => $y->name,
							'like' => $this->checkLike($y->scrapbook_id),
							'view_counter' => $y->view_counter,
							'likes' => $this->getNumberOfLikes($y->scrapbook_id),
							'description' => $y->description
						);					
					}
				}
			}
			return $fw;
		}

		public function getEditorsPick(){
			$query = $this->db->query('SELECT * FROM editors_pick');
			$epick = [];
			foreach($query->result() as $row){
				$epick[] = $row->scrapbook_id;
			}
			$ep = [];			
			foreach($epick as $id){
				$query = $this->db->query("SELECT * FROM scrapbooks WHERE scrapbook_id = '".$id."' AND privacy = 'public' AND blocked = 0");
				foreach($query->result() as $row){
					if($row->blocked == 0){
						$ep[] = array(
							'scrapbook_id' => $row->scrapbook_id,
							'first_page' => $row->first_page,
							'username' => $row->username,
							'name' => $row->name,
							'like' => $this->checkLike($row->scrapbook_id),
							'view_counter' => $row->view_counter,
							'likes' => $this->getNumberOfLikes($row->scrapbook_id),
							'description' => $row->description
						);					
					}
				}				
			}
			return $ep;
		}

		public function editDescription($scrapbook_id, $description){
			$this->db->query('UPDATE scrapbooks SET description = "'.$description.'" WHERE scrapbook_id = "'.$scrapbook_id.'"');
		}

		public function checkLike($scrapbook_id){
			if(!$this->session->has_userdata('username')){
				return 0;
			}
			$query = $this->db->query('SELECT * FROM likes_scrapbooks WHERE username = "'.$this->session->userdata('username').'" AND scrapbook_id = "'.$scrapbook_id.'"');
			foreach($query->result() as $row){
				return 1;
			}
			return 2;
		}

		public function getNumberOfLikes($scrapbook_id){
			return $this->db->query('SELECT * FROM likes_scrapbooks WHERE scrapbook_id = "'.$scrapbook_id.'"')->num_rows();			
		}

		public function togglePrivacy($table, $target, $value){
			$this->db->query('UPDATE '.$table.' SET privacy = "'.$value.'" WHERE '.substr($table, 0, strlen($table) - 1).'_id = "'.$target.'"');
		}

	}

?>