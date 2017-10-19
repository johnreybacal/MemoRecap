<!DOCTYPE html>
<html>
<head>
	<title>MemoRecap - Admin</title>
</head>
<body>
	<h1>Users</h1>
	<table>
		<thead>
			<tr>
				<td>Asset</td>
				<td>Asset id</td>
				<td>Category</td>
				<td>Owner</td>
				<td>Upload date</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($assets as $asset): ?>
				<tr>
					<td><img src = "<?php echo base_url('uploaded_assets/'.$asset->category.$asset->file); ?>" height = "100px" width = "100px" /></td>
					<td><?php echo $asset->asset_id; ?></td>
					<td><?php echo $asset->category; ?></td>
					<td><?php echo $asset->username; ?></td>
					<td><?php echo $asset->upload_date; ?></td>
					<td><?php
						if($asset->blocked == 0){
							echo '<a href = "'.base_url('Admin/blockAsset/'.$asset->asset_id).'">Block</a>';
						}else{
							echo '<a href = "'.base_url('Admin/unblockAsset/'.$asset->asset_id).'">Unblock</a>';
						}
					?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>