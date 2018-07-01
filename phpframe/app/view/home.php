<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $home ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div id="app" class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						
						<tr v-for="student in students">
							<td>{{ student.id }}</td>
							<td>{{ student.name }}</td>
							<td>{{ student.address }}</td>
						</tr>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js.bootstrap.min.js"></script>
	<script src="js/vue.js"></script>
	<script>
		var app = new Vue({
			el: "#app",
			data: {
				students: <?= $students ?>
			}

		});
	</script>
</body>
</html>