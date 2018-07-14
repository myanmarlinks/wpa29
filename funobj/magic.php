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
			private $data = [];
			public static function bark() {
				echo "Woof! <br>";
			}
 
			public function __set($name, $value) {
				$this->data[$name] = $value;
			}
			public function __get($key) {
				return $this->data[$key];
			}
			public function __construct($name, $color = "Black") {
				$this->name = $name;
				$this->color = $color;
			}
			function eat() {
				echo "Dog is eating!";
			}
			public static function __callStatic($name, $arguments) {
				var_dump($name);
				var_dump($arguments);
			}
			public function __call($name, $arguments) {
				var_dump($name);
				var_dump($arguments);
			}

			public function __destruct() {
				echo "Object Destoryed!" . "<br>";
			}
		}
		Dog::bark();
		Dog::dance("day", "wild");
		$dog = new Dog("Aung Net");
		echo $dog->name . "<br>";
		echo $dog->color. "<br>"; 
		$dog->legs = 4;
		echo $dog->legs; 
		$dog->eat();
		$dog->trip("Pyay", 300);
		unset($dog);
		$dog2 = new Dog("Paung Paung");
		$dog2->eat();
		$dog3 = new Dog("Paw Paw");
	 ?>
	 <script>
	 	// ES6
	 	class Dog {
	 		constructor(name, color = "Black") {
	 			this.name = name;
	 			this.color = color;
	 		}
	 		static bark() {
	 			console.log("Woof!");
	 		}
	 		eat() {
	 			console.log("Dog is eating!");
	 		}
	 	}

	 	Dog.bark();
	 	var dog = new Dog("Aung Net");
	 	dog.legs = 4;
	 	console.log(dog.name);
	 	console.log(dog.color);
	 	console.log(dog.legs);
	 	dog.eat();
	 </script>
</body>
</html>