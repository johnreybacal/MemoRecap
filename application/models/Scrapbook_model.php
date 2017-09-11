<?php
	class Scrapbook_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
		}

		private $obj = '';

		//Start of CRUD
		//C
		public function createScrapbook($name, $pages){	
			$scrapbook_id = "0000";
			$query = $this->db->query("SELECT scrapbook_id FROM scrapbooks order by scrapbook_id ASC");
			foreach($query->result_array() as $row){
				$scrapbook_id = $row["scrapbook_id"];				
			}
			$temp = (int)$scrapbook_id + 1;
			$scrapbook_id = "0000".$temp;
			$scrapbook_id = substr($scrapbook_id,strlen($scrapbook_id)-4,strlen($scrapbook_id));
			$json = '{';
			for($i = 0; $i < $pages; $i++){
				$json .= '"'.$i.'":""';
				if($i != $pages - 1){
					$json .= ',';
				}
			}
			$json .= '}';
			$qry = "INSERT into scrapbooks (scrapbook_id, user_id, name, json) VALUES ('$scrapbook_id', '0001', '".$name."', '".$json."')";			
			if($this->db->simple_query($qry)){
				echo 'Ok';
			}else{
				echo "Error";
			}
			return $scrapbook_id;
		}

		public function uploadAsset($image){
			$asset_id = "0000";
			$query = $this->db->query("SELECT asset_id FROM assets order by asset_id ASC");			
			foreach($query->result_array() as $row){
				$asset_id = $row["asset_id"];
			}
			$temp = (int)$asset_id + 1;
			$asset_id = "0000".$temp;
			$asset_id = substr($asset_id,strlen($asset_id)-4,strlen($asset_id));
			$qry = "INSERT into assets (asset_id, file, owner, upload_date) values ('$asset_id', '$image', '0001', '".date("Y/m/d")."')";			
			return ($this->db->simple_query($qry))?"Image Uploaded Successfully <br/>":"Not <br/>";
		}

		//R
		public function displayScrapbooks($user_id){					
			$sbHTML = '';
			$query = $this->db->query("SELECT * FROM scrapbooks WHERE user_id = $user_id order by scrapbook_id ASC");
			foreach($query->result_array() as $row){
				$sbHTML .= '
					<li>'.$row["name"].' | <a href = "'.site_url('MemoRecap/editor/'.$row["scrapbook_id"]).'">Edit</a> | <a href = "'.site_url('MemoRecap/view/'.$row["scrapbook_id"]).'">View</a> | <a href = "'.site_url('MemoRecap/delete/'.$row["scrapbook_id"]).'">Delete</a></li>
				';
			}
			return $sbHTML;
		}

		public function displayAssets(){
			$query = $this->db->query("select * from assets");			
			$assetsHTML = '';				
			foreach($query->result_array() as $row){
				$assetsHTML .= '
					<li>
						<div class = "first" id = "'.$row["asset_id"].'">
							<img src="data:image;base64,'.$row["file"].'" />
						</div>
					</li>
					';
			}		
			return $assetsHTML;
		}

		/*functions for loading a scrapbook*/
		public function loadJSON($id){
			// end($this->uri->segment_array())
			$query = $this->db->query("SELECT * FROM scrapbooks WHERE scrapbook_id = ".$id." ");
			foreach($query->result_array() as $row){
				$this->obj = $row['json'];
			}			
		}
		
		public function loadWorkspace(){
			$str = '';
			$json = json_decode($this->obj, true);
			foreach($json as $page => $assets){
				$str .= '<div id = "p-'.$page.'" class = "pages ui-droppable">';
				if(is_array($assets)){						
					foreach($assets as $asset_id => $attr){
						$str .= '<div class="ui-draggable ui-draggable-handle asset ui-resizable"';
						$str .= 'style = "position: absolute; ';
						$str .= 'left: '.$attr['x'].'; ';
						$str .= 'top: '.$attr['y'].'; ';
						$str .= 'height: '.$attr['h'].'; ';
						$str .= 'width: '.$attr['w'].'; ';
						$str .= 'z-index: '.$attr['z'].';" ';
						$str .= 'id = "'.$asset_id.'">';
						$str .= $this->getImage(substr($asset_id,strlen($asset_id)-4,strlen($asset_id)));	
						$str .= '</div>';
					}
				}
				$str .= '</div>';
			}
			return $str;
		}

		public function getImage($id){
			$str = '';
			$query = $this->db->query("SELECT file from assets WHERE asset_id = $id");
			foreach($query->result_array() as $row){				
				$str .= '<img src="data:image;base64,'.$row['file'].'" />';
			}
			return $str;
		}

		public function loadPagination(){
			$str = '';
			$json = json_decode($this->obj, true);
			foreach($json as $page => $assets){
				$str .= '<li id = "page-'.$page.'" class = "page-button">'.($page + 1).'</li>';
			}
			return $str;
		}

		public function loadZOrder(){//to do: bubble sort using z-index [/]
			$json = json_decode($this->obj, true);
			$str = '';
			foreach($json as $page => $assets){
				$str .= '<ol reversed id = "z-'.$page.'" class="z_order ui-sortable">';
				if(is_array($assets)){
					$x = [];
					foreach($assets as $asset_id => $attr){
						$x[$asset_id] = $attr['z'];
					}
					arsort($x);
					foreach($x as $key => $value){
						$str .= '<li id="'.$key.'-z" class>'.$key.'</li>';
					}
				}
				$str .= '</ol>';
			}
			return $str;
		}
		/*end of functions for loading a scrapbook*/

		//U
		public function save($id, $json){
			if($this->db->simple_query("UPDATE scrapbooks set json='".$json."' WHERE scrapbook_id='".$id."'")){
				echo 'Ok';
			}else{echo 'Omg';}
		}

		//D
		public function delete($id){
			$this->db->query("DELETE FROM scrapbooks WHERE scrapbook_id='".$id."'");
		}
		//End of CRUD

		//More on javascript
		public function getVariables($parameter){
			$json = json_decode($this->obj, true);
			$pageCount = 0;
			$assetCount = 0;
			foreach($json as $page => $assets){
				$pageCount++;
				if(is_array($assets)){						
					foreach($assets as $asset_id => $attr){
						$assetCount++;
					}
				}
			}
			return ($parameter == 'pages')?$pageCount:$assetCount;
		}

		public function applyAttributes(){
			$json = json_decode($this->obj, true);
			$str = 'var x = 0;var y = 0;';
			foreach($json as $page => $assets){			
				if(is_array($assets)){
					foreach($assets as $asset_id => $attr){
						$str .= 'x = position.left + '.$attr['x'].' + 1;';
						$str .= 'y = position.top + '.$attr['y'].' + 1;';
						$str .=	'$(\'#'.$asset_id.'\').animate({';
						$str .= '"position": "absolute", '.
						'"left": x, '.					
						'"top": y, '.
						'"height": "'.$attr['h'].'", '.
						'"width": "'.$attr['w'].'", '.
						'"z-index": "'.$attr['z'].'"';
						$str .= '});';
					}
				}
			}
			return $str;
		}

		public function assignAssets(){
			$json = json_decode($this->obj, true);
			$str = '<script>';
			foreach($json as $page => $assets){
				$str .= 'assets['.$page.'] = "";';
				if(is_array($assets)){
					foreach($assets as $asset_id => $attr){
						$str .= 'assets['.$page.'] += "'.$asset_id.'/";';
					}
				}
			}
			return $str.'</script>';
		}

		public function script(){
			$query = $this->db->query("SELECT * FROM assets");			
			$scriptHTML = '<script>';
			foreach($query->result_array() as $row){
				$scriptHTML .= '$("#'.$row["asset_id"].'").mousedown(function(){ $("#wtf").html("'.$row["asset_id"].'"); });';
			}
			$scriptHTML .= 'pageCount = '.$this->getVariables('pages').';';
			$scriptHTML .= 'assetID = '.$this->getVariables('assets').';';
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

		public function functionalityScript(){
			return '<script>
			$(\'.asset\').resizable({
				containment: "#workspace",		//para hanggang workspace lng ung laki
		    	animate: true, ghost: true,		    	
		    	minHeight: 50, minWidth: 50,
		    	resize: function(event, ui){
		    		$(\'#siz\').html("w: " + ui.size.width + ", h: " + ui.size.height);
		    	}
		    	//handles: "n, e, s, w, nw, ne, sw, se"
		    }).draggable({
				containment: "#workspace", 		//para di lumabas sa workspace
				helper: "original", cursor: "move",
				drag: function(){
					var $this = $(this);
		    		var thisPos = $this.position();
		    		var parPos = $this.parent().position();
		    		var x = thisPos.left - parPos.left;
		    		var y = thisPos.top - parPos.top;
		    		$(\'#pos\').html("x: " + x + ", y: " + y);
				}    			
			});
			$(\'.asset\').mousedown(function(){//gawing focusable lol kinuha ko lng ung id haha
				$(\'#selectedAsset\').html($(this).attr(\'id\'));
			});</script>';
		}

	}
?>