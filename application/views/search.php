<style type="text/css">
	
hr {
    /*height: 10px;*/
    border-top: 3px double #8c8b8b;
}
</style>
<div style = "background-color: white; margin-top: 7%; min-height: 700px;">
	<div class="col-md-4">
	<form action = "<?php echo base_url('Search'); ?>" method = "GET">
		<input type = "search" name = "search" placeholder="Search" />
		<input type = "submit" value = "Search" />
	</form>
	<h1 style="font-weight: 900;">Seach results</h1>
	
</div>
	<div class="container-fluid">
		<div class="row">	
			<div class="col-md-12">	
				<hr/>

					<?php if(isset($users)): ?>

						<h3><b>Users</b></h3>
						
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-3"></div>
									<div class="col-md-2"><h4>Username</h4></div>
									<div class="col-md-2"><h4>Name</h4></div>
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
						<hr>
					<?php endif; ?>	
			

					<?php if(isset($scrapbooks)): ?>
						<br/>
						<h3 ><b>Scrapbooks</b></h3>
						<!-- thead of scrapbook -->
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-2"><h4>Title</h4></div>
								<div class="col-md-2"><h4>Description</h4></div>
								<div class="col-md-1"><h4>Owner</h4></div>
								<div class="col-md-1"><h4>Likes</h4></div>
								<div class="col-md-1"><h4>Views</h4></div>
								<div class="col-md-2"><h4>Action</h4></div>
							</div>		
						</div>
						<!-- tbody scrapbooks of the user -->
						<div class="container-fluid"> <!-- 3rd container-->
							<?php foreach($scrapbooks as $scrapbook): ?>
								<div class="row">
		<!--  -->					
									<div  class="col-md-3"><img src = "<?php echo $scrapbook['first_page']; ?>" />
									</div>
									<h5>
				                	<div class="col-md-2"><?php echo $scrapbook['name']; ?></div>
				                	<div class="col-md-2"><?php echo $scrapbook['description']; ?></div>
					                <div class="col-md-1">
					                  	<a href = "<?php echo base_url('Profile/'.$scrapbook['username']); ?>"><?php echo $scrapbook['username']; ?></a>
					                </div>
					               
					                <div class="col-md-1" id = "like-count-<?php echo $scrapbook['scrapbook_id']; ?>">
					                  	<?php echo $scrapbook['likes']; ?>                  
					                </div>
					            	</h5>
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
						<hr>
						<br>	<?php endforeach; ?>
						</div> <!-- end of 3rd container-->
						<hr />
					
					<?php endif; ?>
	</div>
	
		</div>
	</div>
</div>
