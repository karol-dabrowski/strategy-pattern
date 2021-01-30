<?php

namespace App;

class CalorieCalculator
{
	private BmrCalculator $bmrCalculator;

	public function __construct(BmrCalculator $bmrCalculator)
	{
		$this->bmrCalculator = $bmrCalculator;
	}

	// weight in kilograms, height in centimeters, age in years
	public function calculate(int $weight, int $height, int $age, int $gender, float $activityFactor): int
	{
		$bmr = $this->bmrCalculator->calculateBmr($weight, $height, $age, $gender);
		$amr = $bmr * $activityFactor;

		return round($amr);
	}
}