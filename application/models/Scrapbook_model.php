<?php
	class Scrapbook_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
		}

		private $obj = '';
		
		//methods that are used to create, modify, update, and delete a scrapbook's data
		//Start of CRUD
		//C
		public function createScrapbook($name, $description, $pages, $size, $privacy){
			$username = $this->session->userdata['username'];
			$scrapbook_id = "0000";
			$query = $this->db->query("SELECT scrapbook_id FROM scrapbooks order by scrapbook_id ASC");
			foreach($query->result_array() as $row){
				$scrapbook_id = $row["scrapbook_id"];				
			}
			$temp = (int)$scrapbook_id + 1;
			$scrapbook_id = "0000".$temp;
			$scrapbook_id = substr($scrapbook_id,strlen($scrapbook_id)-4,strlen($scrapbook_id));
			$json = '{';
			$json .= '"height":"'.substr($size, 0, strpos($size,"x")).'","width":"'.substr($size, strpos($size,"x")+1, strlen($size)).'",';
			$json .= '"pages":{';
			for($i = 0; $i < $pages; $i++){
				$json .= '"'.$i.'":{"bg":"rgb(225, 225, 225)"}';
				if($i != $pages - 1){
					$json .= ',';
				}
			}
			$json .= '}}';
			$qry = "INSERT into scrapbooks (scrapbook_id, username, name, description, privacy, view_counter, json, blocked) VALUES ('".$scrapbook_id."', '".$username."', '".$name."', '".$description."', '".$privacy."', '0', '".$json."', '0')";
			if($this->db->simple_query($qry)){
				echo 'Ok';
			}else{
				echo "Error";
			}
			return $scrapbook_id;
		}
		
		/*functions for loading a scrapbook*/
		public function loadJSON($flag, $id, $username = null){
			$sql = "SELECT json FROM scrapbooks WHERE scrapbook_id = '".$id."'";
			if(isset($username)){
				$sql .= " AND (username = '".$username."'";
			}			
			if($flag == 1 && isset($username)){
				$sql .= " OR ";
			}
			if($flag == 1){//view
				if(!isset($username)){
					$sql .= ' AND (';
				}
				$sql .= "privacy = 'public'";
				$this->db->query("UPDATE scrapbooks SET view_counter = view_counter + 1 WHERE scrapbook_id = '".$id."' AND username != '".$username."'");		
			}
			if(isset($username) || $flag == 1){
				$sql .= ")";				
			}
			$query = $this->db->query($sql);
			$ok = false;
			foreach($query->result() as $row){
				$this->obj = $row->json;
				$ok = true;
			}
			return $ok;
		}
		
		public function assignAssets(){//asset id is sorted by its z-index
			$json = json_decode($this->obj, true);
			$str = '<script>';
			foreach($json as $global_attr => $global_val){
			    if(is_array($global_val)){
			        foreach($global_val as $pages => $assets){			
						$str .= 'assets['.$pages.'] = "";';
						$counter = 0;
						$z = [];
						$a = [];
						if(is_array($assets)){
							foreach($assets as $asset_id => $attr){
								if(is_array($attr)){
									$counter++;
									$z[] = $attr['z'];
									$a[] = $asset_id;
								}
							}
						}
						for($x = 0;  $x < count($z); $x++){
							for($y = 0; $y < count($z) - $x - 1; $y++){
								if($z[$y] > $z[$y + 1]){
									$temp1 = $z[$y];
									$z[$y] = $z[$y + 1];
									$z[$y + 1] = $temp1;
									$temp1 = $a[$y];
									$a[$y] = $a[$y + 1];
									$a[$y + 1] = $temp1;
								}
							}
						}
						for($i = 0; $i < $counter; $i++) { 					
							$str .= 'assets['.$pages.'] += "'.$a[$i].'/";';
						}
					}
				}
			}
			return $str.'</script>';
		}
		
		public function loadWorkspace(){
			$str = '';
			$json = json_decode($this->obj, true);			
			foreach($json as $global_attr => $global_val){
			    if(is_array($global_val)){
			        foreach($global_val as $pages => $assets){
						$str .= '<div id = "p-'.$pages.'" class = "pages ui-droppable" style = "background';
			            if(is_array($assets)){
			                foreach($assets as $asset_id => $attr){
			                    if(is_array($attr)){
			                        $str .= '<div class="ui-draggable ui-draggable-handle asset ui-resizable" data-angle = "'.$attr['a'].'"';
									$str .= 'style = "position: absolute; ';
									$str .= 'left: '.$attr['x'].'; ';
									$str .= 'top: '.$attr['y'].'; ';
									$str .= 'height: '.$attr['h'].'; ';
									$str .= 'width: '.$attr['w'].'; ';
									$str .= 'z-index: '.$attr['z'].';" ';
									$str .= 'id = "'.$asset_id.'">';
									$str .= '<div class = "rotate">';
									$str .= '<img src="'.$this->getImage(substr($asset_id,strlen($asset_id)-4,strlen($asset_id))).'" />';
									$str .= '</div></div>';
			                    }else{
			                    	if(strlen($attr) > 4){
		                        		$str .= ': '.$attr.';" data-bg = "rgb">';
			                    	}
			                    	else{
			                    		$str .= '-image: url('.$this->getImage($attr).');" data-bg = "'.$attr.'">';
			                        }			                        
			                    }			                    			                   
			                }
			            }
                    	$str .= '</div>';
			        }
			    }			    
			}			
			return $str;
		}

		public function getImage($id){
			$str = '';
			$query = $this->db->query("SELECT * from assets WHERE asset_id = $id");
			foreach($query->result_array() as $row){				
				$str .= base_url('uploaded_assets/').$row['category'].$row['file'];
			}
			return $str;
		}

		public function loadPagination(){
			$str = '<script>';
			$json = json_decode($this->obj, true);
			foreach($json as $global_attr => $global_val){
			    if(is_array($global_val)){
			        foreach($global_val as $pages => $assets){
						$str .= '$("#pagination").append("<li style = \"display: inline;\" id = \"page-'.$pages.'\" class = \"page-button\">'.($pages + 1).'</li>");';
			        }
			    }
			}			
			return $str.'</script>';
		}

		public function loadZOrder(){//to do: bubble sort using z-index [/]
			$json = json_decode($this->obj, true);
			$str = '';
			foreach($json as $global_attr => $global_val){
			    if(is_array($global_val)){
			        foreach($global_val as $pages => $assets){
						$str .= '<ol reversed id = "z-'.$pages.'" class="z-order ui-sortable">';
						if(is_array($assets)){
							$x = [];
							foreach($assets as $asset_id => $attr){
								if(is_array($attr)){
									$x[$asset_id] = $attr['z'];
								}
							}
							arsort($x);
							foreach($x as $key => $value){
								$str .= '<li id="'.$key.'-z" class>'.$key.'</li>';
							}
						}
						$str .= '</ol>';
			        }
			    }
			}			
			return $str;
		}
		/*end of functions for loading a scrapbook*/
		
		//U
		public function save($id, $json, $blob){
			// $json = json_decode($json)
			if($this->db->simple_query("UPDATE scrapbooks set json='".$json."', first_page = '".$blob."' WHERE scrapbook_id='".$id."'")){
				return 'Success';
			}else{
				return 'Fail';
			}
		}

		//D
		public function delete($id){
			$this->db->query("DELETE FROM scrapbooks WHERE scrapbook_id = '".$id."'");
		}
		//End of CRUD

		//More on javascript
		//Bakit nasa model 'to?
		//Ans: 
		//1. inaapply kasi ung json
		//2. pwede i loop ung script
		//3. hindi pa ako marunong mag AJAX dati lol
		public function getVariables($parameter){
			$json = json_decode($this->obj, true);
			$pageCount = 0;			
			$highest = 0;
			foreach($json as $global_attr => $global_val){
			    if(is_array($global_val)){
			        foreach($global_val as $pages => $assets){			
						$pageCount++;
						if(is_array($assets)){						
							foreach($assets as $asset_id => $attr){
								if(substr($asset_id, 0, strpos($asset_id, '-')) > $highest){
									$highest = substr($asset_id, 0, strpos($asset_id, '-'));
								}
							}
						}
					}
				}
			}
			return ($parameter == 'pages')?$pageCount:++$highest;
		}

		public function setWorkspaceSize(){
			$json = json_decode($this->obj, true);
			$h = 0;
			$w = 0;
			foreach($json as $global_attr => $global_val){
				if($global_attr == 'height'){
			        $h = $global_val;
			    }if($global_attr == 'width'){
			        $w = $global_val;		       
			    }			    
			}
	    	return '$(\'#workspace\').animate({"height":"'.$h.'", "width":"'.$w.'"});';
		}

		public function applyAttributes(){
			$json = '';
			$json = json_decode($this->obj, true);			
			$str = 'var x = 0;var y = 0;';			
			foreach($json as $global_attr => $global_val){
			    if(is_array($global_val)){
			        foreach($global_val as $pages => $assets){			
						if(is_array($assets)){
							foreach($assets as $asset_id => $attr){
								if(is_array($attr)){
									$str .= 'x = '.$attr['x'].';';
									$str .= 'y = '.$attr['y'].';';
									$str .=	'$(\'#'.$asset_id.'\').animate({';
									$str .= '"position": "absolute", '.
									'"left": x, '.					
									'"top": y, '.
									'"height": "'.$attr['h'].'", '.
									'"width": "'.$attr['w'].'", '.
									'"z-index": "'.$attr['z'].'"';
									$str .= '});';
									$str .= '$(\'#'.$asset_id.'\').resizable({containment: "#workspace", minHeight: 50, minWidth: 50, resize: function(event, ui){displayAssetAttributes($(\'#'.$asset_id.'\'));},handles: "n, e, s, w, nw, ne, sw, se"}).draggable({containment: "#workspace",helper: "original", cursor: "move",drag: function(){displayAssetAttributes($(\'#'.$asset_id.'\'));}});$(\'#'.$asset_id.'\').mousedown(function(){displayAssetAttributes($(this));});';
									$str .= '$(\'#'.$asset_id.'\').children(\'div.rotate\').rotatable({wheelRotate: false,rotate: function(){displayAssetAttributes($(\'#'.$asset_id.'\'));},angle: '.($attr['a'] * pi() / 180).'});';
								}
							}
						}
					}
				}
			}
			return $str;
		}


		public function script(){
			$query = $this->db->query("SELECT * FROM assets");			
			$scriptHTML = '<script>';
			foreach($query->result_array() as $row){
				$scriptHTML .= '$("#'.$row["asset_id"].'").mousedown(function(){ $("#wtf").html("'.$row["asset_id"].'"); });';
			}
			$scriptHTML .= 'pageCount = '.$this->getVariables('pages').';';
			$scriptHTML .= 'assetID = '.$this->getVariables('assets').';';
			$scriptHTML .= $this->setWorkspaceSize();
			$scriptHTML .= '
			var element = document.getElementById("workspace");
			var position = element.getBoundingClientRect();
			'.$this->applyAttributes().'
			for(var p = 0; p <= pageCount; p++){
				if(currentPage != p){
					$("#p-" + currentPage).hide();
					$("#z-" + currentPage).hide();
					$("#p-" + p).show();
					$("#z-" + p).show();
				}
				currentPage = p;
			}		
			currentPage = 0;
			$("#p-0").show();
			$("#z-0").show();		
			';
			$scriptHTML .= '</script>';
			return $scriptHTML;
		}
		
	}
?>