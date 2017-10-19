<!DOCTYPE html>
<html>
<head>
	<title>MemoRecap - Admin</title>
</head>
<body>
	<h1>Scrapbooks</h1>
	<table>
		<thead>
			<tr>
				<td>Cover</td>
				<td>Scrapbook id</td>
				<td>Name</td>
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
					<td><?php echo $scrapbook['scrapbook_id']; ?></td>
					<td><?php echo $scrapbook['name']; ?></td>
					<td><?php echo $scrapbook['username']; ?></td>
					<td><?php echo $scrapbook['likes']; ?></td>
					<td><?php echo $scrapbook['view_counter']; ?></td>
					<td>
						<?php
						if($scrapbook['ep'] == 0){
							echo '<a href = "'.base_url('Admin/addToEP/'.$scrapbook['scrapbook_id']).'">Add to editor\'s pick</a>';
						}else{
							echo '<a href = "'.base_url('Admin/RemoveFromEP/'.$scrapbook['scrapbook_id']).'">Remove from editor\'s pick</a>';
						}
						if($scrapbook['blocked'] == 0){
							echo '<a href = "'.base_url('Admin/blockScrapbook/'.$scrapbook['scrapbook_id']).'">Block</a>';
						}else{
							echo '<a href = "'.base_url('Admin/unblockScrapbook/'.$scrapbook['scrapbook_id']).'">Unblock</a>';
						}
					?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>