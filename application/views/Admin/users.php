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
					<td>
						<a href = "<?php echo base_url('Profile/'.$user->username); ?>"><?php echo $user->username; ?></a>
					</td>
					<td><?php echo $user->name; ?></td>
					<td><?php
						if($user->blocked == 0){							
							echo '<button class = "block" data-table = "User" data-id = "'.$user->username.'">Block</button>';
						}else{							
							echo '<button class = "unblock" data-table = "User" data-id = "'.$user->username.'">Unblock</button>';
						}
					?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>