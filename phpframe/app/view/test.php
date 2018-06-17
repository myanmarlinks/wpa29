<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($students as $student) { ?>
				<tr>
					<td><?php echo $student['id']; ?></td>
					<td><?php echo $student['name']; ?></td>
				</tr>
			<?php } ?>
			
		</tbody>
	</table>
</body>
</html>