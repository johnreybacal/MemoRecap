<!DOCTYPE html>
<html>
<head>
	<title>MemoRecap - Admin</title>
</head>
<body>
	<h1>Reports</h1>
	<table>
		<thead>
			<tr>
				<td>Reporter</td>
				<td>Type</td>
				<td>Target</td>
				<td>Reason</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($reports as $report): ?>
				<tr>				
					<td><?php echo $report->reporter; ?></td>
					<td><?php echo $report->type; ?></td>
					<td><?php echo $report->target; ?></td>
					<td><?php echo $report->reason; ?></td>
					<td>
						<a href = "<?php echo base_url('Admin/acceptReport/'.$report->type.'/'.$report->target.'/'.$report->report_id); ?>">Accept report</a> | <a href = "<?php echo base_url('Admin/deleteReport/'.$report->report_id); ?>">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>