<?php


class Animal
{
    private $age; // в годах
    private $weight; // в кг
	
	function __construct($age, $weight) {
		$this->age = $age;
		$this->weight = $weight;
	}

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

}