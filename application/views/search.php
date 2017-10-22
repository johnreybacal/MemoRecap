<div style = "background-color: white; margin-top: 7%;">
	<div class="col-md-4">
	<form action = "<?php echo base_url('Search'); ?>" method = "GET">
		<input type = "search" name = "search" />
		<input type = "submit" value = "Search" />
	</form>
	<h3>Seach results</h3>
	<hr />
</div>
	<div class="container-fluid">
		<div class="row">	
			<div class="col-md-12">	
				

					<?php if(isset($users)): ?>

						<h4>Users</h4>
						
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-3">DP</div>
									<div class="col-md-2">Username</div>
									<div class="col-md-2">Name</div>
								</div>
							</div>		
						</div>

						<div class="container-fluid">
							<?php foreach($users as $user): ?>
								<div class="row">
									<div class="col-md-3"><img src = "<?php echo base_url('dp/'.$user->dp); ?>" /></div>
									<div class="col-md-2"><a href = "<?php echo base_url('Profile/'.$user->username); ?>"><?php echo $user->username; ?></a></div>
									<div class="col-md-2"><?php echo $user->name; ?></div>
								</div>
							<?php endforeach; ?>
						</div>
						
					<?php endif; ?>	
			

					<?php if(isset($scrapbooks)): ?>
						<h4>Scrapbooks</h4>
						<!-- thead of scrapbook -->
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-3">Cover</div>
								<div class="col-md-2">Title</div>
								<div class="col-md-2">Description</div>
								<div class="col-md-1">Owner</div>
								<div class="col-md-1">Likes</div>
								<div class="col-md-1">Views</div>
								<div class="col-md-2">Action</div>
							</div>		
						</div>
						<!-- tbody scrapbooks of the user -->
						<div class="container-fluid"> <!-- 3rd container-->
							<?php foreach($scrapbooks as $scrapbook): ?>
								<div class="row">
		<!--  -->					
									<div  class="col-md-3"><img src = "<?php echo $scrapbook['first_page']; ?>" />
									</div>

				                	<div class="col-md-2"><?php echo $scrapbook['name']; ?></div>
				                	<div class="col-md-2"><?php echo $scrapbook['description']; ?></div>
					                <div class="col-md-1">
					                  	<a href = "<?php echo base_url('Profile/'.$scrapbook['username']); ?>"><?php echo $scrapbook['username']; ?></a>
					                </div>
					               
					                <div class="col-md-1" id = "like-count-<?php echo $scrapbook['scrapbook_id']; ?>">
					                  	<?php echo $scrapbook['likes']; ?>                  
					                </div>

					                <div class="col-md-1"><?php echo $scrapbook['view_counter']; ?></div>
					                <h5><div class="col-md-2">
					                  	<a href = "<?php echo base_url('view/'.$scrapbook['scrapbook_id']); ?>"><span style="font-size: 24px;" class="glyphicon glyphicon-eye-open w3-margin-left" style="color: black;"></span></a>
					                  	
					                  	<?php
						                    switch($scrapbook['like']){
						                      case 0:
						                        break;
						                      case 1:
						                        echo '<button style="float:left; border:none; background-color: rgba(0,0,0,0); font-size:24px;" class = "unlike" data-id = "'.$scrapbook['scrapbook_id'].'"><span class="glyphicon glyphicon-heart left" style="color: red;"></span></button>';
						                        break;
						                      case 2:
						                        echo '<button style="float:left; border:none; background-color: rgba(0,0,0,0); font-size:24px;" class = "like" data-id = "'.$scrapbook['scrapbook_id'].'"><span class="glyphicon glyphicon-heart-empty left" style="color: red;"></span></button>';
						                        break;
						                    }                        
					                  
					                  		if($this->session->userdata('logged_in')){
								                echo '<button style = "border:none; background-color:rgba(0,0,0,0);  color:red; font-size:28px;" class = "reportButton" data-scid = "'.$scrapbook["scrapbook_id"].'"><i class="fa fa-exclamation" ></i></button>';
											}
					                	?>

					                </div></h5>
					               
								</div> <!-- end of row-->
						<br>	<?php endforeach; ?>
						</div> <!-- end of 3rd container-->
						<hr />
					
					<?php endif; ?>
	</div>
	
		</div>
	</div>
</div>
