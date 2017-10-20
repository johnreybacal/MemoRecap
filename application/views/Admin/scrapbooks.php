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