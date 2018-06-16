<?php 

$home = <<<HOME
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
</head>
<body>
	<h1>Home Page</h1>
</body>
</html>
HOME;

$blog = <<<BLOG
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Blog Area</title>
	</head>
	<body>
		<h1>Blog Area</h1>
	</body>
	</html>
BLOG;

$page = <<<PAGE
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page Area</title>
</head>
<body>
	<h1>Page Area</h1>
</body>
</html>
PAGE;

if(!isset($_GET['page'])) {
	echo $home;
} elseif($_GET['page'] == "blog") {
	echo $blog;
} elseif($_GET['page'] == 'page') {
	echo $page;
} else {
	echo "404";
}

 ?>