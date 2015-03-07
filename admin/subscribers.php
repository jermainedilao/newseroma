<?php
	$subscribers = view_subscriber();
?>
<!DOCTYPE html>
<html>
	<head><title>View Subscribers</title></head>
	<body>
		<h4>Subscribers</h4>
		<div class = "col-md-8" style="height:300px;overflow:auto;">
			<table class = "table table-hover">
				<thead>
					<tr>
						<th>Email</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($subscribers as $sn): ?>
						<tr>
							<td><?php echo htmlentities($sn['subscriberemail']); ?></td>
							<td><?php echo htmlentities($sn['subscriberstatus']); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class = "col-md-4">
		
		</div>
	</body>
</html>