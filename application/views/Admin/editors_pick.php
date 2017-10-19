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
			<?php foreach($editors_pick as $ep): ?>
				<tr>
					<td><img src = "<?php echo $ep['first_page']; ?>" height = "100px" width = "100px" /></td>
					<td><?php echo $ep['scrapbook_id']; ?></td>
					<td><?php echo $ep['name']; ?></td>
					<td><?php echo $ep['username']; ?></td>
					<td><?php echo $ep['likes']; ?></td>
					<td><?php echo $ep['view_counter']; ?></td>
					<td>
						<a href = "<?php echo base_url('Admin/removeFromEP/'.$ep['scrapbook_id']); ?>">Remove from editor's pick</a>
						<?php
						if($ep['blocked'] == 0){
							echo '<a href = "'.base_url('Admin/blockScrapbook/'.$ep['scrapbook_id']).'">Block</a>';
						}else{
							echo '<a href = "'.base_url('Admin/unblockScrapbook/'.$ep['scrapbook_id']).'">Unblock</a>';
						}
					?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>