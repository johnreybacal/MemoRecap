<!DOCTYPE html>
<html>
<head>
	<title>BFF Admin</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>

<link rel="icon" type="png/image" href="<?php echo base_url('css/favicon.png'); ?>">
<style>
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
li{
	list-style: none;
	margin: 0px;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    
}

tr:nth-child(even){background-color: #d8d8d8
}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body style="background-color: whitesmoke;">
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 title">
				<h4 class="text-center">Scrapbooks</h4>
				
			</div>
			<div class="col-md-2 vertical-menu">
				<ul>
					<li><a href = "<?php echo base_url('Admin/Users'); ?>">Users</a></li>
					<li><a class="active" href = "<?php echo base_url('Admin/Scrapbooks'); ?>">Scrapbooks</a></li>
					<li><a href = "<?php echo base_url('Admin/Assets'); ?>">Assets</a></li>
					<li><a href = "<?php echo base_url('Admin/Reports'); ?>">Reports</a></li>					
					<li><a href = "<?php echo base_url('Admin/Editors_Pick'); ?>">Editor's Pick</a></li>
					<li><a href = "<?php echo base_url('Admin/Add_Admin'); ?>">Add an Admin</a></li>
					<li><a href = "<?php echo base_url('Admin/Options'); ?>">Account Options</a></li>
					<li><a href = "<?php echo base_url('Admin/Logout'); ?>">Logout</a></li>
				</ul>
			</div>
			<div class="col-md-10">
				<!-- <h1 class="text-center">List of Clients</h1> -->
			
		
					<div class="table-responsive">						
						<table class = "table table-hover">
							<thead>
								<tr>
									<th>Cover Photo</th>
									<th>Scrapbook ID</th>
									<th>Name</th>
									<th>Owner</th>								
									<th>Likes</th>								
									<th>Views</th>								
									<th>Action</th>								
								</tr>
							</thead>
							<tbody>
								<?php foreach($scrapbooks as $scrapbook): ?>
								<tr>
									<td><img src = "<?php echo $scrapbook['first_page']; ?>" height = "100px" width = "100px" /></td>
									<td><?php echo $scrapbook['scrapbook_id']; ?></td>
									<td>
										<a href = "<?php echo base_url('view/'.$scrapbook['scrapbook_id']); ?>"><?php echo $scrapbook['name']; ?></a>
									</td>
									<td>
										<a href = "<?php echo base_url('Profile/'.$scrapbook['username']); ?>"><?php echo $scrapbook['username']; ?></a>
									</td>
									<td><?php echo $scrapbook['likes']; ?></td>
									<td><?php echo $scrapbook['view_counter']; ?></td>
									<td>
										<?php
											if($scrapbook['ep'] == 0){							
												echo '<button class = "addToEP" data-id = "'.$scrapbook['scrapbook_id'].'">Add to editor\'s pick</button>';
											}else{							
												echo '<button class = "removeFromEP" data-id = "'.$scrapbook['scrapbook_id'].'">Remove from editor\'s pick</button>';
											}
											if($scrapbook['blocked'] == 0){							
												echo '<button class = "block" data-table = "Scrapbook" data-id = "'.$scrapbook['scrapbook_id'].'">Block</button>';
											}else{							
												echo '<button class = "unblock" data-table = "Scrapbook" data-id = "'.$scrapbook['scrapbook_id'].'">Unblock</button>';
											}
										?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>		
						</table>
					</div>
				</div>
		</div>
	</div>
</body>
</html>
		