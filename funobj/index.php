<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 


		abstract class Animal {
			public $name;
			public function eat() {
				echo "Eat" . "<br>";
			}
		}
		trait Special {
			public $foo;
			public function dance() {
				echo "Dance!" . "<br>";
			}
		}
		trait SuperSpecial {
			public function fool() {
				echo "Dog is fool!" . "<br>";
			}
		}
		class Dog extends Animal {
			use Special, SuperSpecial;
			public function bark() {
				echo "Woof!" . "<br>";	
			}
		}
		class Cat extends Animal {
			use Special;
			public function meow() {
				echo "Meow!" . "<br>";	
			}
		}
		$dog = new Dog();
		$dog->name = "Aung Aung";
		$cat = new Cat();
		$cat->name = "Foo";
		$dog->dance();
		echo $dog->foo;
		$dog->eat();
		$dog->fool();
		$cat->eat();
	 ?>

	<script>
		
	</script>
</body>
</html>