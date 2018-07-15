<?php 
interface TestInterface {
	public function bark();
	public function eat();
	public function sleep(); 
}
interface AnotherInterface {
	public function dance();
}
class Dog implements TestInterface, AnotherInterface {
	public function bark() { }
	public function eat() { }
	public function sleep() { }
	public function dance() { }
}