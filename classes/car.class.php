<?php
	class Car{
		private $make;
		private $model;
		private $colour;
		private $description;
		private $price;
		private $reg_number;
		private $reg_year;
		
		function_construct($make, $model, $colour, $description, $price, $reg_number, $reg_year){
		
			$this->make = $make;
			$this->model = $model;
			$this->colour = $colour;
			$this->description = $description;
			$this->price = $price;
			$this->reg_number = $reg_number;
			$this->reg_year = $reg_year;
		}
	}
?>