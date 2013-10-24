<?php
	class Car{
		Private $make;
		private $model;
		private $colour;
		private $description;
		private $price;
		private $reg_number;
		private $reg_year;
		
		function __construct($make, $model, $colour, $description, $price, $reg_number, $reg_year){
		
			$this->make = $make;
			$this->model = $model;
			$this->colour = $colour;
			$this->description = $description;
			$this->price = $price;
			$this->reg_number = $reg_number;
			$this->reg_year = $reg_year;
		}
		function getMake(){
			return $this->make;
		}
		function getModel(){
			return $this->model;
		}
		function getColour(){
			return $this->colour;
		}
		function getDescription(){
			return $this->description;
		}
		function getPrice(){
			return $this->price;
		}
		function getReg(){
			return $this->reg_number;
		}
		function getYear(){
			return $this->reg_year;
		}
		
		/**
		 * gets the age of the car
		 *
		 * Calculates the age of the car using the current year and the
		 *registration year, and returns it.
		 *
		 * @Return   int    age of the car		 
		 */
		 
		 function getAge(){
			$age = intval (date('Y')) - $this->reg_year;
			return $age;
		 
		 }
		 
	}
?>