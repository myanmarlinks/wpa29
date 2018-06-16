<?php 


if(!isset($_GET['page'])) {
	include "../app/view/home.php";
} elseif($_GET['page'] == "blog") {
	include "../app/view/blog.php";
} elseif($_GET['page'] == 'page') {
	include "../app/view/page.php";
} else {
	echo "404";
}

 ?>