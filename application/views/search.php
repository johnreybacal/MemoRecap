<div style = "background-color: white; margin-top: 7%;">
	<form action = "<?php echo base_url('Search'); ?>" method = "GET">
		<input type = "search" name = "search" />
		<input type = "submit" value = "Search" />
	</form>
	<h3>Seach results</h3>
	<hr />
	<?php if(isset($scrapbooks)): ?>
		<h4>Scrapbooks</h4>
		<table>
			<thead>
				<tr>
					<td>Cover</td>
					<td>Title</td>
					<td>Description</td>
					<td>Owner</td>
					<td>Likes</td>
					<td>Views</td>
					<td>Action</td>
				</tr>		
			</thead>
			<tbody>
				<?php foreach($scrapbooks as $scrapbook): ?>
					<tr>
						<td><img src = "<?php echo $scrapbook['first_page']; ?>" height = "100px" width = "100px" /></td>
	                <td><?php echo $scrapbook['name']; ?></td>
	                <td><?php echo $scrapbook['description']; ?></td>
	                <td>
	                  	<a href = "<?php echo base_url('Profile/'.$scrapbook['username']); ?>"><?php echo $scrapbook['username']; ?></a>
	                </td>
	                <td id = "like-count-<?php echo $scrapbook['scrapbook_id']; ?>">
	                  	<?php echo $scrapbook['likes']; ?>                  
	                </td>
	                <td><?php echo $scrapbook['view_counter']; ?></td>
	                <td>
	                  	<a href = "<?php echo base_url('view/'.$scrapbook['scrapbook_id']); ?>">View</a>
	                  	<?php
		                    switch($scrapbook['like']){
		                      	case 0:
		                        	break;
		                      	case 1:
		                        	echo '<button class = "unlike" data-id = "'.$scrapbook['scrapbook_id'].'">Unlike</button>';
		                        	break;
		                      	case 2:
			                        echo '<button class = "like" data-id = "'.$scrapbook['scrapbook_id'].'">Like</button>';
			                        break;
		                    }                    
	                  
	                  		if($this->session->userdata('logged_in')){
				                echo '<button class = "reportButton" data-scid = "'.$scrapbook["scrapbook_id"].'">Report</button>';
							}
	                	?>
	                </td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<hr />
	<?php endif; ?>
	<?php if(isset($users)): ?>
		<h4>Users</h4>
		<table>
			<thead>
				<tr>
					<td>DP</td>
					<td>Username</td>
					<td>Name</td>
				</tr>		
			</thead>
			<tbody>
				<?php foreach($users as $user): ?>
					<tr>
						<td><img src = "<?php echo base_url('dp/'.$user->dp); ?>" /></td>
						<td><a href = "<?php echo base_url('Profile/'.$user->username); ?>"><?php echo $user->username; ?></a></td>
						<td><?php echo $user->name; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>
</div>