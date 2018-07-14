<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello Object Orienteds</title>
</head>
<body>
	<?php 
		class Dog {
			public $name, $color;

			public function __construct($name, $color = "Black") {
				$this->name = $name;
				$this->color = $color;
			}
			function eat() {
				echo "Dog is eating!";
			}
		}
		$dog = new Dog("Aung Net");
		echo $dog->name . "<br>";
		echo $dog->color. "<br>"; 
		$dog->legs = 4;
		$dog->eat();
	 ?>
	 <script>
	 	// ES6
	 	class Dog {
	 		constructor(name, color = "Black") {
	 			this.name = name;
	 			this.color = color;
	 		}
	 		eat() {
	 			console.log("Dog is eating!");
	 		}
	 	}

	 	var dog = new Dog("Aung Net");
	 	dog.legs = 4;
	 	console.log(dog.name);
	 	console.log(dog.color);
	 	console.log(dog.legs);
	 	dog.eat();
	 </script>
</body>
</html>