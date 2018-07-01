<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $home ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="http://localhost:8000/createstudent" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input name="name" type="text" class="form-control" id="student_name" placeholder="Enter Name">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<textarea name="address" class="form-control"></textarea>
					</div>
				
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/vue.js"></script>
</body>
</html>