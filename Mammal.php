<?php


class Mammal extends Animal
{
    private $number_of_cubs; // в штуках
    private $pregnancy_period; // в днях
	
	function __construct($age, $weight, $pregnancy_period, $number_of_cubs) {
		parent::__construct($age, $weight);
		$this->number_of_cubs = $number_of_cubs;
		$this->pregnancy_period = $pregnancy_period;
	}

    protected function getNumberOfCubs() {
        return $this->number_of_cubs;
    }

    protected function setNumberOfCubs($number_of_cubs) {
        $this->number_of_cubs = $number_of_cubs;
    }

    protected function getPregnancyPeriod() {
        return $this->pregnancy_period;
    }

    protected function setPregnancyPeriod($pregnancy_period) {
        $this->pregnancy_period = $pregnancy_period;
    }
}