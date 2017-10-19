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
				<td>Profile picture</td>
				<td>Username</td>
				<td>Name</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
				<tr>
					<td><img src = "<?php echo base_url('dp/'.$user->dp); ?>" height = "100px" width = "100px" /></td>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->name; ?></td>
					<td><?php
						if($user->blocked == 0){
							echo '<a href = "'.base_url('Admin/blockUser/'.$user->username).'">Block</a>';
						}else{
							echo '<a href = "'.base_url('Admin/unblockUser/'.$user->username).'">Unblock</a>';
						}
					?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>