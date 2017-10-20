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
			return ($this->db->simple_query($qry))?"Image Uploaded Successfully <br/>":"Not <br/>";
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
			$query = $this->db->query("SELECT * FROM assets WHERE category = '".$category."' AND (username = '".$username."' OR privacy = 'public')");			
			foreach($query->result_array() as $row){
				$assetsHTML .= '
					<li>
						<div class = "first" id = "'.$row["asset_id"].'">
							<img src="'.base_url('uploaded_assets/').$row['category'].$row["file"].'" />
						</div>';
				if($category == 'User_Images/' || $category == 'Backgrounds/'){
					$assetsHTML .=	'<button data-id = "'.$row["asset_id"].'" class = "setBG btn btn-default btn-md">Set as BG</button>';
					
				}		
				$assetsHTML .= '</li>
					';
			}
			return $assetsHTML;
		}

		public function displayAssets($username){//for editor
			$assetsHTML = '';				
			$assetsHTML .= ' <div id="1" class="tab-pane active"><h4>User images</h4><ul class="asset-picker">'.$this->displayAssetsLooper('User_Images/', $username).'</ul></div>';
			$assetsHTML .= ' <div id="2" class="tab-pane"><h4>Backgrounds</h4><ul class="asset-picker">'.$this->displayAssetsLooper('Backgrounds/', $username).'</ul></div>';
			$assetsHTML .= ' <div id="3" class="tab-pane"><h4>Stickers</h4><ul class="asset-picker">'.$this->displayAssetsLooper('Stickers/', $username).'</ul></div>';
			$assetsHTML .= ' <div id="4" class="tab-pane"><h4>Shapes</h4><ul class="asset-picker">'.$this->displayAssetsLooper('Shapes/', $username).'</ul></div>';
			return $assetsHTML;
		}

	}

?>
