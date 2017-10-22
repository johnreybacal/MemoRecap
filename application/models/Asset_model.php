<?php
	class Asset_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
		}

		public function uploadAsset($image, $category, $privacy){
			$username = $this->session->userdata['username'];			
			$asset_id = "0000";
			$query = $this->db->query("SELECT asset_id FROM assets order by asset_id ASC");			
			foreach($query->result_array() as $row){
				$asset_id = $row["asset_id"];
			}
			$temp = (int)$asset_id + 1;
			$asset_id = "0000".$temp;
			$asset_id = substr($asset_id,strlen($asset_id)-4,strlen($asset_id));
			$qry = "INSERT into assets (asset_id, file, category, username, privacy, upload_date) VALUES ('".$asset_id."', '".$image."', '".$category."', '".$username."', '".$privacy."', '".date("Y/m/d")."')";
			return ($this->db->simple_query($qry))?$asset_id:"Failed";
		}

		//R

		public function getAssets($category, $logged_in){
			$where = "AND (privacy = 'public'";
			if($logged_in){
				$where .= " OR username = '".$this->session->userdata('username')."'";
			}
			$where .= ')';
			$ass = [];
			$query = $this->db->query("SELECT * FROM assets WHERE category = '".$category."' ".$where);
			foreach($query->result_array() as $row){
				$ass[] = $row;
			}
			return $ass;
		}

		public function displayAssetsLooper($category, $username){
			$assetsHTML = '';				
			$query = $this->db->query("SELECT * FROM assets WHERE category = '".$category."' AND (username = '".$username."' OR privacy = 'public') AND blocked = 0");			
			foreach($query->result_array() as $row){
				$assetsHTML .= '<li>';
				if($category == 'Backgrounds/'){
					$assetsHTML .= '<div class = "bg-asset box" id = "'.$row["asset_id"].'">';
				}else{
					$assetsHTML .= '<div class = "first" id = "'.$row["asset_id"].'">';
				}
				$assetsHTML .= '<img src="'.base_url('uploaded_assets/').$row['category'].$row["file"].'" /></div>';
				$assetsHTML .= '</li>';
			}
			return $assetsHTML;
		}

		public function displayAssets($cat, $username){//for editor
			switch($cat) {
				case 1:				
					return ' <div id="user_images" class="tab-pane active"><ul class="asset-picker">'.$this->displayAssetsLooper('User_Images/', $username).'</ul></div>';
				case 2:
					return ' <div id="backgrounds" class="tab-pane"><ul class="asset-picker">'.$this->displayAssetsLooper('Backgrounds/', $username).'</ul></div>';					
				case 3:
					return ' <div id="stickers" class="tab-pane"><ul class="asset-picker">'.$this->displayAssetsLooper('Stickers/', $username).'</ul></div>';
				case 4:
					return ' <div id="shapes" class="tab-pane"><ul class="asset-picker">'.$this->displayAssetsLooper('Shapes/', $username).'</ul></div>';
			}			
		}

	}

?>
