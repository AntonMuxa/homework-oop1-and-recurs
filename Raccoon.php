<?php


class Raccoon extends Mammal
{
    protected $kind; //подвид
    protected $color; //окрас

    function __construct($age, $weight, $pregnancy_period, $number_of_cubs, $kind, $color) {
		parent::__construct($age, $weight, $pregnancy_period, $number_of_cubs);
		$this->number_of_cubs = parent::getNumberOfCubs();
        $this->kind = $kind;
        $this->color = $color;
    }

    protected function getkind() {
        return $this->kind;
    }

    protected function setkind($kind) {
        $this->kind = $kind;
    }

    protected function getColor() {
        return $this->color;
    }

    protected function setColor($color) {
        $this->color = $color;
    }
}