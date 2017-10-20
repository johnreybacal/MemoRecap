	<h1>Editor's pick</h1>
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
						<button class = "removeFromEP removeWhenRemoved" data-id = "<?php echo $ep['scrapbook_id']; ?>">Remove from editor's pick</button>	
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>